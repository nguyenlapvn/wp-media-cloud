<?php
namespace Advanced_Media_Offloader\Vendor\Aws\DefaultsMode\Exception;

use Advanced_Media_Offloader\Vendor\Aws\HasMonitoringEventsTrait;
use Advanced_Media_Offloader\Vendor\Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration mode
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
