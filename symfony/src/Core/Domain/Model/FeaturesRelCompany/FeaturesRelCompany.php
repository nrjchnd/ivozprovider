<?php

namespace Core\Domain\Model\FeaturesRelCompany;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * FeaturesRelCompany
 */
class FeaturesRelCompany implements EntityInterface, FeaturesRelCompanyInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Core\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Core\Domain\Model\Feature\FeatureInterface
     */
    protected $feature;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct()
    {

    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return FeaturesRelCompanyDTO
     */
    public static function createDTO()
    {
        return new FeaturesRelCompanyDTO();
    }

    /**
     * Factory method
     * @param FeaturesRelCompanyDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FeaturesRelCompanyDTO::class);

        $self = new self();

        return $self
            ->setCompany($dto->getCompany())
            ->setFeature($dto->getFeature());
    }

    /**
     * @param FeaturesRelCompanyDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FeaturesRelCompanyDTO::class);

        $this
            ->setCompany($dto->getCompany())
            ->setFeature($dto->getFeature());


        return $this;
    }

    /**
     * @return FeaturesRelCompanyDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setFeatureId($this->getFeature() ? $this->getFeature()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'featureId' => $this->getFeature() ? $this->getFeature()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set company
     *
     * @param \Core\Domain\Model\Company\CompanyInterface $company
     *
     * @return FeaturesRelCompany
     */
    protected function setCompany(\Core\Domain\Model\Company\CompanyInterface $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set feature
     *
     * @param \Core\Domain\Model\Feature\FeatureInterface $feature
     *
     * @return FeaturesRelCompany
     */
    protected function setFeature(\Core\Domain\Model\Feature\FeatureInterface $feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return \Core\Domain\Model\Feature\FeatureInterface
     */
    public function getFeature()
    {
        return $this->feature;
    }



    // @codeCoverageIgnoreEnd
}
