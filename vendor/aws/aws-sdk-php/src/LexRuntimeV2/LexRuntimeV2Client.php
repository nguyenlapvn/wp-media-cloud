<?php
namespace Advanced_Media_Offloader\Vendor\Aws\LexRuntimeV2;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Runtime V2** service.
 * @method \Aws\Result deleteSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSessionAsync(array $args = [])
 * @method \Aws\Result getSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \Aws\Result putSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSessionAsync(array $args = [])
 * @method \Aws\Result recognizeText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeTextAsync(array $args = [])
 * @method \Aws\Result recognizeUtterance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeUtteranceAsync(array $args = [])
 */
class LexRuntimeV2Client extends AwsClient {}
