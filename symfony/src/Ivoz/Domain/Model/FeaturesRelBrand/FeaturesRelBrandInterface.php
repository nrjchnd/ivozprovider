<?php

namespace Ivoz\Domain\Model\FeaturesRelBrand;

use Core\Domain\Model\EntityInterface;

interface FeaturesRelBrandInterface extends EntityInterface
{
    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return FeaturesRelBrandInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set feature
     *
     * @param \Ivoz\Domain\Model\Feature\FeatureInterface $feature
     *
     * @return FeaturesRelBrandInterface
     */
    public function setFeature(\Ivoz\Domain\Model\Feature\FeatureInterface $feature);


    /**
     * Get feature
     *
     * @return \Ivoz\Domain\Model\Feature\FeatureInterface
     */
    public function getFeature();



}

