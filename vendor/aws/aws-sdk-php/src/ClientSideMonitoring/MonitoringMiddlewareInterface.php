<?php

namespace Advanced_Media_Offloader\Vendor\Aws\ClientSideMonitoring;

use Advanced_Media_Offloader\Vendor\Aws\CommandInterface;
use Advanced_Media_Offloader\Vendor\Aws\Exception\AwsException;
use Advanced_Media_Offloader\Vendor\Aws\ResultInterface;
use GuzzleHttp\Psr7\Request;
use Advanced_Media_Offloader\Vendor\Psr\Http\Message\RequestInterface;

/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{

    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(RequestInterface $request);


    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);

    public function __invoke(CommandInterface $cmd, RequestInterface $request);
}