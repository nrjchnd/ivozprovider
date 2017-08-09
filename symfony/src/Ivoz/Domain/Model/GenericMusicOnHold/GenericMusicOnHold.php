<?php

namespace Ivoz\Domain\Model\GenericMusicOnHold;

/**
 * GenericMusicOnHold
 */
class GenericMusicOnHold extends GenericMusicOnHoldAbstract implements GenericMusicOnHoldInterface
{
    use GenericMusicOnHoldTrait;

    public function getOwner(){
        return
            'brand'
            . $this->getBrand()->getId();
    }
}

