<?php
namespace Advanced_Media_Offloader\Vendor\Aws\Endpoint\UseDualstackEndpoint;

use Aws;
use Advanced_Media_Offloader\Vendor\Aws\Endpoint\UseDualstackEndpoint\Exception\ConfigurationException;

class Configuration implements ConfigurationInterface
{
    private $useDualstackEndpoint;

    public function __construct($useDualstackEndpoint, $region)
    {
        $this->useDualstackEndpoint = \Advanced_Media_Offloader\Vendor\Aws\boolean_value($useDualstackEndpoint);
        if (is_null($this->useDualstackEndpoint)) {
            throw new ConfigurationException("'use_dual_stack_endpoint' config option"
                . " must be a boolean value.");
        }
        if ($this->useDualstackEndpoint == true
            && (strpos($region, "iso-") !== false || strpos($region, "-iso") !== false)
        ) {
            throw new ConfigurationException("Dual-stack is not supported in ISO regions");        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUseDualstackEndpoint()
    {
        return $this->useDualstackEndpoint;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'use_dual_stack_endpoint' => $this->isUseDualstackEndpoint(),
        ];
    }
}
