<?php

namespace Ivoz\Domain\Service\HuntGroup;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\HuntGroup\HuntGroup;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\HuntGroup
 * @lifecycle hunt_group.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param HuntGroup $entity
     */
    public function execute(EntityInterface $entity)
    {
        $nullableFields = array(
            'number' => 'noAnswerNumberValue',
            'extension' => 'noAnswerExtension',
            'voicemail' => 'noAnswerVoiceMailUser'
        );

        $routeType = $entity->getNoAnswerTargetType();
        foreach ($nullableFields as $type => $fieldName) {
            if ($routeType == $type) {
                continue;
            }

            $setter = 'set' . ucfirst($fieldName);
            $entity->{$setter}(null);
        }
    }
}