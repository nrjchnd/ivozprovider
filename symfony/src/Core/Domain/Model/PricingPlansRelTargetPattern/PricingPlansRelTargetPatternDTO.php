<?php

namespace Core\Domain\Model\PricingPlansRelTargetPattern;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class PricingPlansRelTargetPatternDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $connectionCharge;

    /**
     * @var integer
     */
    private $periodTime;

    /**
     * @var string
     */
    private $perPeriodCharge;

    /**
     * @var mixed
     */
    private $pricingPlanId;

    /**
     * @var mixed
     */
    private $targetPatternId;

    /**
     * @var mixed
     */
    private $brandId;

    /**
     * @var mixed
     */
    private $pricingPlan;

    /**
     * @var mixed
     */
    private $targetPattern;

    /**
     * @var mixed
     */
    private $brand;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'connectionCharge' => $this->getConnectionCharge(),
            'periodTime' => $this->getPeriodTime(),
            'perPeriodCharge' => $this->getPerPeriodCharge(),
            'pricingPlanId' => $this->getPricingPlanId(),
            'targetPatternId' => $this->getTargetPatternId(),
            'brandId' => $this->getBrandId()
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
            ->setConnectionCharge(isset($data['connectionCharge']) ? $data['connectionCharge'] : null)
            ->setPeriodTime(isset($data['periodTime']) ? $data['periodTime'] : null)
            ->setPerPeriodCharge(isset($data['perPeriodCharge']) ? $data['perPeriodCharge'] : null)
            ->setPricingPlanId(isset($data['pricingPlanId']) ? $data['pricingPlanId'] : null)
            ->setTargetPatternId(isset($data['targetPatternId']) ? $data['targetPatternId'] : null)
            ->setBrandId(isset($data['brandId']) ? $data['brandId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->pricingPlan = $transformer->transform('Core\\Domain\\Model\\PricingPlan\\PricingPlanInterface', $this->getPricingPlanId());
        $this->targetPattern = $transformer->transform('Core\\Domain\\Model\\TargetPattern\\TargetPatternInterface', $this->getTargetPatternId());
        $this->brand = $transformer->transform('Core\\Domain\\Model\\Brand\\BrandInterface', $this->getBrandId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return PricingPlansRelTargetPatternDTO
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
     * @param string $connectionCharge
     *
     * @return PricingPlansRelTargetPatternDTO
     */
    public function setConnectionCharge($connectionCharge)
    {
        $this->connectionCharge = $connectionCharge;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectionCharge()
    {
        return $this->connectionCharge;
    }

    /**
     * @param integer $periodTime
     *
     * @return PricingPlansRelTargetPatternDTO
     */
    public function setPeriodTime($periodTime)
    {
        $this->periodTime = $periodTime;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPeriodTime()
    {
        return $this->periodTime;
    }

    /**
     * @param string $perPeriodCharge
     *
     * @return PricingPlansRelTargetPatternDTO
     */
    public function setPerPeriodCharge($perPeriodCharge)
    {
        $this->perPeriodCharge = $perPeriodCharge;

        return $this;
    }

    /**
     * @return string
     */
    public function getPerPeriodCharge()
    {
        return $this->perPeriodCharge;
    }

    /**
     * @param integer $pricingPlanId
     *
     * @return PricingPlansRelTargetPatternDTO
     */
    public function setPricingPlanId($pricingPlanId)
    {
        $this->pricingPlanId = $pricingPlanId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPricingPlanId()
    {
        return $this->pricingPlanId;
    }

    /**
     * @return \Core\Domain\Model\PricingPlan\PricingPlanInterface
     */
    public function getPricingPlan()
    {
        return $this->pricingPlan;
    }

    /**
     * @param integer $targetPatternId
     *
     * @return PricingPlansRelTargetPatternDTO
     */
    public function setTargetPatternId($targetPatternId)
    {
        $this->targetPatternId = $targetPatternId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTargetPatternId()
    {
        return $this->targetPatternId;
    }

    /**
     * @return \Core\Domain\Model\TargetPattern\TargetPatternInterface
     */
    public function getTargetPattern()
    {
        return $this->targetPattern;
    }

    /**
     * @param integer $brandId
     *
     * @return PricingPlansRelTargetPatternDTO
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
}
