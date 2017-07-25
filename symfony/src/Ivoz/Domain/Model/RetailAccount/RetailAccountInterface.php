<?php

namespace Ivoz\Domain\Model\RetailAccount;

use Core\Domain\Model\EntityInterface;

interface RetailAccountInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return RetailAccountInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return RetailAccountInterface
     */
    public function setDomain($domain = null);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return RetailAccountInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set transport
     *
     * @param string $transport
     *
     * @return RetailAccountInterface
     */
    public function setTransport($transport);


    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport();


    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return RetailAccountInterface
     */
    public function setIp($ip = null);


    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();


    /**
     * Set port
     *
     * @param integer $port
     *
     * @return RetailAccountInterface
     */
    public function setPort($port = null);


    /**
     * Get port
     *
     * @return integer
     */
    public function getPort();


    /**
     * Set authNeeded
     *
     * @param string $authNeeded
     *
     * @return RetailAccountInterface
     */
    public function setAuthNeeded($authNeeded);


    /**
     * Get authNeeded
     *
     * @return string
     */
    public function getAuthNeeded();


    /**
     * Set password
     *
     * @param string $password
     *
     * @return RetailAccountInterface
     */
    public function setPassword($password = null);


    /**
     * Get password
     *
     * @return string
     */
    public function getPassword();


    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return RetailAccountInterface
     */
    public function setAreaCode($areaCode = null);


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Set disallow
     *
     * @param string $disallow
     *
     * @return RetailAccountInterface
     */
    public function setDisallow($disallow);


    /**
     * Get disallow
     *
     * @return string
     */
    public function getDisallow();


    /**
     * Set allow
     *
     * @param string $allow
     *
     * @return RetailAccountInterface
     */
    public function setAllow($allow);


    /**
     * Get allow
     *
     * @return string
     */
    public function getAllow();


    /**
     * Set directMediaMethod
     *
     * @param string $directMediaMethod
     *
     * @return RetailAccountInterface
     */
    public function setDirectMediaMethod($directMediaMethod);


    /**
     * Get directMediaMethod
     *
     * @return string
     */
    public function getDirectMediaMethod();


    /**
     * Set calleridUpdateHeader
     *
     * @param string $calleridUpdateHeader
     *
     * @return RetailAccountInterface
     */
    public function setCalleridUpdateHeader($calleridUpdateHeader);


    /**
     * Get calleridUpdateHeader
     *
     * @return string
     */
    public function getCalleridUpdateHeader();


    /**
     * Set updateCallerid
     *
     * @param string $updateCallerid
     *
     * @return RetailAccountInterface
     */
    public function setUpdateCallerid($updateCallerid);


    /**
     * Get updateCallerid
     *
     * @return string
     */
    public function getUpdateCallerid();


    /**
     * Set fromDomain
     *
     * @param string $fromDomain
     *
     * @return RetailAccountInterface
     */
    public function setFromDomain($fromDomain = null);


    /**
     * Get fromDomain
     *
     * @return string
     */
    public function getFromDomain();


    /**
     * Set directConnectivity
     *
     * @param string $directConnectivity
     *
     * @return RetailAccountInterface
     */
    public function setDirectConnectivity($directConnectivity);


    /**
     * Get directConnectivity
     *
     * @return string
     */
    public function getDirectConnectivity();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return RetailAccountInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return RetailAccountInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set country
     *
     * @param \Ivoz\Domain\Model\Country\CountryInterface $country
     *
     * @return RetailAccountInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Set outgoingDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return RetailAccountInterface
     */
    public function setOutgoingDDI(\Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI = null);


    /**
     * Get outgoingDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();


    /**
     * Set language
     *
     * @param \Ivoz\Domain\Model\Language\LanguageInterface $language
     *
     * @return RetailAccountInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();



}

