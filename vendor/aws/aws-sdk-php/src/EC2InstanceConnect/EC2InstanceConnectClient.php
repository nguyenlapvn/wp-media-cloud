<?php
namespace Advanced_Media_Offloader\Vendor\Aws\EC2InstanceConnect;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method \Aws\Result sendSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSSHPublicKeyAsync(array $args = [])
 * @method \Aws\Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}
