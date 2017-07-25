<?php

namespace Ivoz\Domain\Model\PricingPlan;

use Core\Domain\Model\EntityInterface;

interface PricingPlanInterface extends EntityInterface
{
    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return PricingPlanInterface
     */
    public function setCreatedOn($createdOn);


    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return PricingPlanInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set name
     *
     * @param Name $name
     *
     * @return PricingPlanInterface
     */
    public function setName(Name $name);


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();


    /**
     * Set description
     *
     * @param Description $description
     *
     * @return PricingPlanInterface
     */
    public function setDescription(Description $description);


    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription();

}

