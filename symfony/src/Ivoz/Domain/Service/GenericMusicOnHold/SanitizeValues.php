<?php
namespace Ivoz\Domain\Service\GenericMusicOnHold;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold;

/**
 * Class SanitizeValues
 * @package Ivoz\Domain\Service\GenericMusicOnHold
 * @lifecycle generic_music_on_hold.pre_persist
 */
class SanitizeValues implements LifecycleEventHandlerInterface
{
    public function __construct() {}

    /**
     * @param GenericMusicOnHold $entity
     */
    public function execute(EntityInterface $entity)
    {
        throw new \Exception('Not implemented yet');

//        $mustRecode = false;
//
//        $fso = $model->fetchOriginalFile(false);
//
//        if ($fso instanceof \Iron_Model_Fso && $fso->mustFlush()) {
//            $mustRecode = true;
//            $model->setStatus('pending');
//        }
    }
}
