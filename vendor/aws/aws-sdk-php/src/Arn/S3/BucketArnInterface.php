<?php
namespace Advanced_Media_Offloader\Vendor\Aws\Arn\S3;

use Advanced_Media_Offloader\Vendor\Aws\Arn\ArnInterface;

/**
 * @internal
 */
interface BucketArnInterface extends ArnInterface
{
    public function getBucketName();
}
