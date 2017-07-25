<?php

namespace Ivoz\Domain\Model\RoutingPattern;

use Core\Domain\Model\EntityInterface;

interface RoutingPatternInterface extends EntityInterface
{
    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return RoutingPatternInterface
     */
    public function setRegExp($regExp);


    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return RoutingPatternInterface
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
     * @return RoutingPatternInterface
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
     * @return RoutingPatternInterface
     */
    public function setDescription(Description $description);


    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription();

}

