<?php
namespace Advanced_Media_Offloader\Vendor\Aws\BedrockAgentRuntime;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Agents for Amazon Bedrock Runtime** service.
 * @method \Aws\Result invokeAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAgentAsync(array $args = [])
 * @method \Aws\Result retrieve(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveAsync(array $args = [])
 * @method \Aws\Result retrieveAndGenerate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveAndGenerateAsync(array $args = [])
 */
class BedrockAgentRuntimeClient extends AwsClient {}
