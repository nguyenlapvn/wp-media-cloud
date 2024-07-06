<?php
namespace Advanced_Media_Offloader\Vendor\Aws\Api\ErrorParser;

use Advanced_Media_Offloader\Vendor\Aws\Api\Parser\MetadataParserTrait;
use Advanced_Media_Offloader\Vendor\Aws\Api\Parser\PayloadParserTrait;
use Advanced_Media_Offloader\Vendor\Aws\Api\Service;
use Advanced_Media_Offloader\Vendor\Aws\Api\StructureShape;
use Advanced_Media_Offloader\Vendor\Aws\CommandInterface;
use Advanced_Media_Offloader\Vendor\Psr\Http\Message\ResponseInterface;

abstract class AbstractErrorParser
{
    use MetadataParserTrait;
    use PayloadParserTrait;

    /**
     * @var Service
     */
    protected $api;

    /**
     * @param Service $api
     */
    public function __construct(Service $api = null)
    {
        $this->api = $api;
    }

    abstract protected function payload(
        ResponseInterface $response,
        StructureShape $member
    );

    protected function extractPayload(
        StructureShape $member,
        ResponseInterface $response
    ) {
        if ($member instanceof StructureShape) {
            // Structure members parse top-level data into a specific key.
            return $this->payload($response, $member);
        } else {
            // Streaming data is just the stream from the response body.
            return $response->getBody();
        }
    }

    protected function populateShape(
        array &$data,
        ResponseInterface $response,
        CommandInterface $command = null
    ) {
        $data['body'] = [];

        if (!empty($command) && !empty($this->api)) {

            // If modeled error code is indicated, check for known error shape
            if (!empty($data['code'])) {

                $errors = $this->api->getOperation($command->getName())->getErrors();
                foreach ($errors as $key => $error) {

                    // If error code matches a known error shape, populate the body
                    if ($data['code'] == $error['name']
                        && $error instanceof StructureShape
                    ) {
                        $modeledError = $error;
                        $data['body'] = $this->extractPayload(
                            $modeledError,
                            $response
                        );
                        $data['error_shape'] = $modeledError;

                        foreach ($error->getMembers() as $name => $member) {
                            switch ($member['location']) {
                                case 'header':
                                    $this->extractHeader($name, $member, $response, $data['body']);
                                    break;
                                case 'headers':
                                    $this->extractHeaders($name, $member, $response, $data['body']);
                                    break;
                                case 'statusCode':
                                    $this->extractStatus($name, $response, $data['body']);
                                    break;
                            }
                        }

                        break;
                    }
                }
            }
        }

        return $data;
    }
}