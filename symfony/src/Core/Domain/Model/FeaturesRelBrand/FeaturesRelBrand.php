<?php

namespace Core\Domain\Model\FeaturesRelBrand;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * FeaturesRelBrand
 */
class FeaturesRelBrand implements EntityInterface, FeaturesRelBrandInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Core\Domain\Model\Brand\BrandInterface
     */
    protected $brand;

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
     * @return FeaturesRelBrandDTO
     */
    public static function createDTO()
    {
        return new FeaturesRelBrandDTO();
    }

    /**
     * Factory method
     * @param FeaturesRelBrandDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FeaturesRelBrandDTO::class);

        $self = new self();

        return $self
            ->setBrand($dto->getBrand())
            ->setFeature($dto->getFeature());
    }

    /**
     * @param FeaturesRelBrandDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FeaturesRelBrandDTO::class);

        $this
            ->setBrand($dto->getBrand())
            ->setFeature($dto->getFeature());


        return $this;
    }

    /**
     * @return FeaturesRelBrandDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setBrandId($this->getBrand() ? $this->getBrand()->getId() : null)
            ->setFeatureId($this->getFeature() ? $this->getFeature()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'brandId' => $this->getBrand() ? $this->getBrand()->getId() : null,
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
     * Set brand
     *
     * @param \Core\Domain\Model\Brand\BrandInterface $brand
     *
     * @return FeaturesRelBrand
     */
    public function setBrand(\Core\Domain\Model\Brand\BrandInterface $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Core\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set feature
     *
     * @param \Core\Domain\Model\Feature\FeatureInterface $feature
     *
     * @return FeaturesRelBrand
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
