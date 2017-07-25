<?php

namespace Ivoz\Domain\Model\GenericCallACLPattern;

use Core\Domain\Model\EntityInterface;

interface GenericCallACLPatternInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return GenericCallACLPatternInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return GenericCallACLPatternInterface
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
     * @return GenericCallACLPatternInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}

