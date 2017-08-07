<?php
namespace Ivoz\Domain\Service\ExternalCallFilter;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilter;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\Extension
 * @lifecycle extension.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param ExternalCallFilter $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $holidayNullableFields = array(
            "number" => "holidayNumberValue",
            "extension" => "holidayExtension",
            "voicemail" => "holidayVoiceMailUser",
        );

        $routeTypeHoliday = $entity->getHolidayTargetType();

        foreach ($holidayNullableFields as $type => $fieldName) {
            if ($routeTypeHoliday == $type) {
                continue;
            }

            $setter = "set".ucfirst($fieldName);
            $entity->{$setter}(null);
        }

        $scheduleNullableFields = array(
            "number" => "outOfScheduleNumberValue",
            "extension" => "outOfScheduleExtension",
            "voicemail" => "outOfScheduleVoiceMailUser",
        );

        $schedulerouteType = $entity->getOutOfScheduleTargetType();

        foreach ($scheduleNullableFields as $type => $fieldName) {
            if ($schedulerouteType == $type) {
                continue;
            }
            $setter = "set".ucfirst($fieldName);
            $entity->{$setter}(null);
        }
    }
}
