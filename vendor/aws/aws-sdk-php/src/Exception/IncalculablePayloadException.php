<?php
namespace Advanced_Media_Offloader\Vendor\Aws\Exception;

use Advanced_Media_Offloader\Vendor\Aws\HasMonitoringEventsTrait;
use Advanced_Media_Offloader\Vendor\Aws\MonitoringEventsInterface;

class IncalculablePayloadException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
