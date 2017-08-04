<?php
namespace Ivoz\Domain\Model\Extension;

/**
 * Extension
 */
class Extension extends ExtensionAbstract implements ExtensionInterface
{
    use ExtensionTrait;

    public function toArrayPortal()
    {
        return [
            'id' => $this->getId(),
            'number' => $this->getNumber()
        ];
    }

}

