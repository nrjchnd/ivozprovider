<?php
namespace Ivoz\Domain\Model\FeaturesRelCompany;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * FeaturesRelCompanyAbstract
 */
abstract class FeaturesRelCompanyAbstract
{
    /**
     * @var \Ivoz\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Ivoz\Domain\Model\Feature\FeatureInterface
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

        $this->initChangelog();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    public function getInitialValue($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }

        return $this->_initialValues[$fieldName];
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
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FeaturesRelCompanyDTO
         */
        Assertion::isInstanceOf($dto, FeaturesRelCompanyDTO::class);

        $self = new static();

        return $self
            ->setCompany($dto->getCompany())
            ->setFeature($dto->getFeature())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FeaturesRelCompanyDTO
         */
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
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setFeatureId($this->getFeature() ? $this->getFeature()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'featureId' => $this->getFeature() ? $this->getFeature()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return self
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company)
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
     * Set feature
     *
     * @param \Ivoz\Domain\Model\Feature\FeatureInterface $feature
     *
     * @return self
     */
    public function setFeature(\Ivoz\Domain\Model\Feature\FeatureInterface $feature = null)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return \Ivoz\Domain\Model\Feature\FeatureInterface
     */
    public function getFeature()
    {
        return $this->feature;
    }



    // @codeCoverageIgnoreEnd
}

