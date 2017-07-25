<?php

namespace Ivoz\Domain\Model\Friend;

use Core\Domain\Model\EntityInterface;

interface FriendInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
     */
    public function setAreaCode($areaCode = null);


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return FriendInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority();


    /**
     * Set disallow
     *
     * @param string $disallow
     *
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
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
     * @return FriendInterface
     */
    public function setDirectConnectivity($directConnectivity);


    /**
     * Get directConnectivity
     *
     * @return string
     */
    public function getDirectConnectivity();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return FriendInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


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
     * @return FriendInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Set callACL
     *
     * @param \Ivoz\Domain\Model\CallACL\CallACLInterface $callACL
     *
     * @return FriendInterface
     */
    public function setCallACL(\Ivoz\Domain\Model\CallACL\CallACLInterface $callACL = null);


    /**
     * Get callACL
     *
     * @return \Ivoz\Domain\Model\CallACL\CallACLInterface
     */
    public function getCallACL();


    /**
     * Set outgoingDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return FriendInterface
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
     * @return FriendInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();



}

