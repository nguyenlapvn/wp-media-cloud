<?php
namespace Advanced_Media_Offloader\Vendor\Aws\SagemakerEdgeManager;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Sagemaker Edge Manager** service.
 * @method \Aws\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Aws\Result getDeviceRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceRegistrationAsync(array $args = [])
 * @method \Aws\Result sendHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendHeartbeatAsync(array $args = [])
 */
class SagemakerEdgeManagerClient extends AwsClient {}