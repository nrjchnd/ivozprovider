<?php

namespace Ivoz\Domain\Model\FixedCost;

use Core\Domain\Model\EntityInterface;

interface FixedCostInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return FixedCostInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return FixedCostInterface
     */
    public function setDescription($description = null);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return FixedCostInterface
     */
    public function setCost($cost = null);


    /**
     * Get cost
     *
     * @return string
     */
    public function getCost();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return FixedCostInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}

