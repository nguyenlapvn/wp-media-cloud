<?php
namespace Advanced_Media_Offloader\Vendor\Aws\Arn\S3;

use Advanced_Media_Offloader\Vendor\Aws\Arn\ArnInterface;

/**
 * @internal
 */
interface OutpostsArnInterface extends ArnInterface
{
    public function getOutpostId();
}
