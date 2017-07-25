<?php
namespace Ivoz\Domain\Service\ConferenceRoom;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\ConferenceRoom\ConferenceRoom;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\ConferenceRoom
 * @lifecycle conference_room.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param ConferenceRoom $entity
     */
    public function execute(EntityInterface $entity)
    {
        if (!$entity->getPinProtected()) {
            $entity->setPinCode(null);
        }
    }
}