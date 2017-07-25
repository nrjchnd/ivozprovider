<?php

namespace Ivoz\Domain\Model\BrandService;

use Core\Domain\Model\EntityInterface;

interface BrandServiceInterface extends EntityInterface
{
    /**
     * Set code
     *
     * @param string $code
     *
     * @return BrandServiceInterface
     */
    public function setCode($code);


    /**
     * Get code
     *
     * @return string
     */
    public function getCode();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return BrandServiceInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set service
     *
     * @param \Ivoz\Domain\Model\Service\ServiceInterface $service
     *
     * @return BrandServiceInterface
     */
    public function setService(\Ivoz\Domain\Model\Service\ServiceInterface $service);


    /**
     * Get service
     *
     * @return \Ivoz\Domain\Model\Service\ServiceInterface
     */
    public function getService();



}

