<?php

namespace Core\Domain\Model\FeaturesRelBrand;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class FeaturesRelBrandDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var mixed
     */
    private $brandId;

    /**
     * @var mixed
     */
    private $featureId;

    /**
     * @var mixed
     */
    private $brand;

    /**
     * @var mixed
     */
    private $feature;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'brandId' => $this->getBrandId(),
            'featureId' => $this->getFeatureId()
        ];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setBrandId(isset($data['brandId']) ? $data['brandId'] : null)
            ->setFeatureId(isset($data['featureId']) ? $data['featureId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->brand = $transformer->transform('Core\\Domain\\Model\\Brand\\BrandInterface', $this->getBrandId());
        $this->feature = $transformer->transform('Core\\Domain\\Model\\Feature\\FeatureInterface', $this->getFeatureId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return FeaturesRelBrandDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $brandId
     *
     * @return FeaturesRelBrandDTO
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return \Core\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param integer $featureId
     *
     * @return FeaturesRelBrandDTO
     */
    public function setFeatureId($featureId)
    {
        $this->featureId = $featureId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFeatureId()
    {
        return $this->featureId;
    }

    /**
     * @return \Core\Domain\Model\Feature\FeatureInterface
     */
    public function getFeature()
    {
        return $this->feature;
    }
}
