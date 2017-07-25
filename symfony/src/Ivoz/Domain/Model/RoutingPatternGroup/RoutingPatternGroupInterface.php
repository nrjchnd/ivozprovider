<?php

namespace Ivoz\Domain\Model\RoutingPatternGroup;

use Core\Domain\Model\EntityInterface;

interface RoutingPatternGroupInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return RoutingPatternGroupInterface
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
     * @return RoutingPatternGroupInterface
     */
    public function setDescription($description = null);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return RoutingPatternGroupInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}

