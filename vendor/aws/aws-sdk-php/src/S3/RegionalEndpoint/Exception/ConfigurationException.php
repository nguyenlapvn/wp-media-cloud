<?php
namespace Advanced_Media_Offloader\Vendor\Aws\S3\RegionalEndpoint\Exception;

use Advanced_Media_Offloader\Vendor\Aws\HasMonitoringEventsTrait;
use Advanced_Media_Offloader\Vendor\Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
