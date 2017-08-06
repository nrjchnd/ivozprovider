<?php

namespace Ivoz\Domain\Model\PricingPlansRelCompany;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * PricingPlansRelCompanyAbstract
 */
abstract class PricingPlansRelCompanyAbstract
{
    /**
     * @var \DateTime
     */
    protected $validFrom;

    /**
     * @var \DateTime
     */
    protected $validTo;

    /**
     * @var integer
     */
    protected $metric = '10';

    /**
     * @var \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface
     */
    protected $pricingPlan;

    /**
     * @var \Ivoz\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Ivoz\Domain\Model\Brand\BrandInterface
     */
    protected $brand;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($validFrom, $validTo, $metric)
    {
        $this->setValidFrom($validFrom);
        $this->setValidTo($validTo);
        $this->setMetric($metric);
        $this->initChangelog();
    }

    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    /**
     * @return PricingPlansRelCompanyDTO
     */
    public static function createDTO()
    {
        return new PricingPlansRelCompanyDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto PricingPlansRelCompanyDTO
         */
        Assertion::isInstanceOf($dto, PricingPlansRelCompanyDTO::class);

        $self = new static(
            $dto->getValidFrom(),
            $dto->getValidTo(),
            $dto->getMetric());

        return $self
            ->setPricingPlan($dto->getPricingPlan())
            ->setCompany($dto->getCompany())
            ->setBrand($dto->getBrand())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto PricingPlansRelCompanyDTO
         */
        Assertion::isInstanceOf($dto, PricingPlansRelCompanyDTO::class);

        $this
            ->setValidFrom($dto->getValidFrom())
            ->setValidTo($dto->getValidTo())
            ->setMetric($dto->getMetric())
            ->setPricingPlan($dto->getPricingPlan())
            ->setCompany($dto->getCompany())
            ->setBrand($dto->getBrand());


        return $this;
    }

    /**
     * @return PricingPlansRelCompanyDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setValidFrom($this->getValidFrom())
            ->setValidTo($this->getValidTo())
            ->setMetric($this->getMetric())
            ->setPricingPlanId($this->getPricingPlan() ? $this->getPricingPlan()->getId() : null)
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setBrandId($this->getBrand() ? $this->getBrand()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'validFrom' => $this->getValidFrom(),
            'validTo' => $this->getValidTo(),
            'metric' => $this->getMetric(),
            'pricingPlanId' => $this->getPricingPlan() ? $this->getPricingPlan()->getId() : null,
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'brandId' => $this->getBrand() ? $this->getBrand()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     *
     * @return self
     */
    public function setValidFrom($validFrom)
    {
        Assertion::notNull($validFrom);

        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validTo
     *
     * @param \DateTime $validTo
     *
     * @return self
     */
    public function setValidTo($validTo)
    {
        Assertion::notNull($validTo);

        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Get validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Set metric
     *
     * @param integer $metric
     *
     * @return self
     */
    public function setMetric($metric)
    {
        Assertion::notNull($metric);
        Assertion::integerish($metric);

        $this->metric = $metric;

        return $this;
    }

    /**
     * Get metric
     *
     * @return integer
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * Set pricingPlan
     *
     * @param \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan
     *
     * @return self
     */
    public function setPricingPlan(\Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan)
    {
        $this->pricingPlan = $pricingPlan;

        return $this;
    }

    /**
     * Get pricingPlan
     *
     * @return \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface
     */
    public function getPricingPlan()
    {
        return $this->pricingPlan;
    }

    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return self
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return self
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }



    // @codeCoverageIgnoreEnd
}

