<?php
namespace Ivoz\Domain\Service\GenericMusicOnHold;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold;
use \IvozProvider\Gearmand\Jobs;

/**
 * Class Recoder
 * @package Ivoz\Domain\Service\GenericMusicOnHold
 * @lifecycle generic_music_on_hold.post_persist
 */
class Recoder implements LifecycleEventHandlerInterface
{
    /**
     * @var Jobs\Recoder
     */
    protected $recoder;

    public function __construct(
        Jobs\Recoder $recoder
    ) {
        $this->recoder = $recoder;
    }

    /**
     * @param GenericMusicOnHold $entity
     */
    public function execute(EntityInterface $entity)
    {
        throw new \Exception('Not implemented yet');

        $mustRecode = false;

        if ($mustRecode) {
            $recoderJob = new Recoder();
            $this
                ->recoder
                ->setId($entity->getId())
                ->setModelName("GenericMusicOnHold")
                ->send();
        }
    }
}
