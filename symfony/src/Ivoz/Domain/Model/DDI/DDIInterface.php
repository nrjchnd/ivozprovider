<?php

namespace Ivoz\Domain\Model\DDI;

use Core\Domain\Model\EntityInterface;

interface DDIInterface extends EntityInterface
{
    /**
     * Set ddi
     *
     * @param string $ddi
     *
     * @return DDIInterface
     */
    public function setDdi($ddi);


    /**
     * Get ddi
     *
     * @return string
     */
    public function getDdi();


    /**
     * Set ddie164
     *
     * @param string $ddie164
     *
     * @return DDIInterface
     */
    public function setDdie164($ddie164 = null);


    /**
     * Get ddie164
     *
     * @return string
     */
    public function getDdie164();


    /**
     * Set recordCalls
     *
     * @param string $recordCalls
     *
     * @return DDIInterface
     */
    public function setRecordCalls($recordCalls);


    /**
     * Get recordCalls
     *
     * @return string
     */
    public function getRecordCalls();


    /**
     * Set displayName
     *
     * @param string $displayName
     *
     * @return DDIInterface
     */
    public function setDisplayName($displayName = null);


    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName();


    /**
     * Set routeType
     *
     * @param string $routeType
     *
     * @return DDIInterface
     */
    public function setRouteType($routeType = null);


    /**
     * Get routeType
     *
     * @return string
     */
    public function getRouteType();


    /**
     * Set billInboundCalls
     *
     * @param boolean $billInboundCalls
     *
     * @return DDIInterface
     */
    public function setBillInboundCalls($billInboundCalls);


    /**
     * Get billInboundCalls
     *
     * @return boolean
     */
    public function getBillInboundCalls();


    /**
     * Set friendValue
     *
     * @param string $friendValue
     *
     * @return DDIInterface
     */
    public function setFriendValue($friendValue = null);


    /**
     * Get friendValue
     *
     * @return string
     */
    public function getFriendValue();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return DDIInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return DDIInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set conferenceRoom
     *
     * @param \Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface $conferenceRoom
     *
     * @return DDIInterface
     */
    public function setConferenceRoom(\Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface $conferenceRoom = null);


    /**
     * Get conferenceRoom
     *
     * @return \Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface
     */
    public function getConferenceRoom();


    /**
     * Set language
     *
     * @param \Ivoz\Domain\Model\Language\LanguageInterface $language
     *
     * @return DDIInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();


    /**
     * Set queue
     *
     * @param \Ivoz\Domain\Model\Queue\QueueInterface $queue
     *
     * @return DDIInterface
     */
    public function setQueue(\Ivoz\Domain\Model\Queue\QueueInterface $queue = null);


    /**
     * Get queue
     *
     * @return \Ivoz\Domain\Model\Queue\QueueInterface
     */
    public function getQueue();


    /**
     * Set externalCallFilter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $externalCallFilter
     *
     * @return DDIInterface
     */
    public function setExternalCallFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $externalCallFilter = null);


    /**
     * Get externalCallFilter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getExternalCallFilter();


    /**
     * Set user
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $user
     *
     * @return DDIInterface
     */
    public function setUser(\Ivoz\Domain\Model\User\UserInterface $user = null);


    /**
     * Get user
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getUser();


    /**
     * Set iVRCommon
     *
     * @param \Ivoz\Domain\Model\IVRCommon\IVRCommonInterface $iVRCommon
     *
     * @return DDIInterface
     */
    public function setIVRCommon(\Ivoz\Domain\Model\IVRCommon\IVRCommonInterface $iVRCommon = null);


    /**
     * Get iVRCommon
     *
     * @return \Ivoz\Domain\Model\IVRCommon\IVRCommonInterface
     */
    public function getIVRCommon();


    /**
     * Set iVRCustom
     *
     * @param \Ivoz\Domain\Model\IVRCustom\IVRCustomInterface $iVRCustom
     *
     * @return DDIInterface
     */
    public function setIVRCustom(\Ivoz\Domain\Model\IVRCustom\IVRCustomInterface $iVRCustom = null);


    /**
     * Get iVRCustom
     *
     * @return \Ivoz\Domain\Model\IVRCustom\IVRCustomInterface
     */
    public function getIVRCustom();


    /**
     * Set huntGroup
     *
     * @param \Ivoz\Domain\Model\HuntGroup\HuntGroupInterface $huntGroup
     *
     * @return DDIInterface
     */
    public function setHuntGroup(\Ivoz\Domain\Model\HuntGroup\HuntGroupInterface $huntGroup = null);


    /**
     * Get huntGroup
     *
     * @return \Ivoz\Domain\Model\HuntGroup\HuntGroupInterface
     */
    public function getHuntGroup();


    /**
     * Set fax
     *
     * @param \Ivoz\Domain\Model\Fax\FaxInterface $fax
     *
     * @return DDIInterface
     */
    public function setFax(\Ivoz\Domain\Model\Fax\FaxInterface $fax = null);


    /**
     * Get fax
     *
     * @return \Ivoz\Domain\Model\Fax\FaxInterface
     */
    public function getFax();


    /**
     * Set peeringContract
     *
     * @param \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract
     *
     * @return DDIInterface
     */
    public function setPeeringContract(\Ivoz\Domain\Model\PeeringContract\PeeringContractInterface $peeringContract = null);


    /**
     * Get peeringContract
     *
     * @return \Ivoz\Domain\Model\PeeringContract\PeeringContractInterface
     */
    public function getPeeringContract();


    /**
     * Set country
     *
     * @param \Ivoz\Domain\Model\Country\CountryInterface $country
     *
     * @return DDIInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Set retailAccount
     *
     * @param \Ivoz\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount
     *
     * @return DDIInterface
     */
    public function setRetailAccount(\Ivoz\Domain\Model\RetailAccount\RetailAccountInterface $retailAccount = null);


    /**
     * Get retailAccount
     *
     * @return \Ivoz\Domain\Model\RetailAccount\RetailAccountInterface
     */
    public function getRetailAccount();



}

