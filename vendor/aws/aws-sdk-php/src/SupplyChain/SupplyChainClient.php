<?php
namespace Advanced_Media_Offloader\Vendor\Aws\SupplyChain;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Supply Chain** service.
 * @method \Aws\Result createBillOfMaterialsImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBillOfMaterialsImportJobAsync(array $args = [])
 * @method \Aws\Result getBillOfMaterialsImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBillOfMaterialsImportJobAsync(array $args = [])
 * @method \Aws\Result sendDataIntegrationEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendDataIntegrationEventAsync(array $args = [])
 */
class SupplyChainClient extends AwsClient {}
