<?php

namespace Ivoz\Domain\Model\BrandURL;

use Core\Domain\Model\EntityInterface;

interface BrandURLInterface extends EntityInterface
{
    /**
     * Set url
     *
     * @param string $url
     *
     * @return BrandURLInterface
     */
    public function setUrl($url);


    /**
     * Get url
     *
     * @return string
     */
    public function getUrl();


    /**
     * Set klearTheme
     *
     * @param string $klearTheme
     *
     * @return BrandURLInterface
     */
    public function setKlearTheme($klearTheme = null);


    /**
     * Get klearTheme
     *
     * @return string
     */
    public function getKlearTheme();


    /**
     * Set urlType
     *
     * @param string $urlType
     *
     * @return BrandURLInterface
     */
    public function setUrlType($urlType);


    /**
     * Get urlType
     *
     * @return string
     */
    public function getUrlType();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return BrandURLInterface
     */
    public function setName($name = null);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set userTheme
     *
     * @param string $userTheme
     *
     * @return BrandURLInterface
     */
    public function setUserTheme($userTheme = null);


    /**
     * Get userTheme
     *
     * @return string
     */
    public function getUserTheme();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return BrandURLInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set logo
     *
     * @param Logo $logo
     *
     * @return BrandURLInterface
     */
    public function setLogo(Logo $logo);


    /**
     * Get logo
     *
     * @return Logo
     */
    public function getLogo();

}

