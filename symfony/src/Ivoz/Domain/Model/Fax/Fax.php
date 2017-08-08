<?php
namespace Ivoz\Domain\Model\Fax;

/**
 * Fax
 */
class Fax extends FaxAbstract implements FaxInterface
{
    use FaxTrait;

    /**
     * {@inheritDoc}
     */
    public function getOutgoingDDI()
    {
        if (!is_null($this->outgoingDDI)) {

            return parent::getOutgoingDDI();
        }

        return $this
            ->getCompany()
            ->getOutgoingDDI();
    }
}

