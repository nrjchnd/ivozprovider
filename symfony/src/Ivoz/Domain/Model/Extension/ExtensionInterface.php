<?php

namespace Ivoz\Domain\Model\Extension;

use Core\Domain\Model\EntityInterface;

interface ExtensionInterface extends EntityInterface
{
    /**
     * Set number
     *
     * @param string $number
     *
     * @return ExtensionInterface
     */
    public function setNumber($number);


    /**
     * Get number
     *
     * @return string
     */
    public function getNumber();


    /**
     * Set routeType
     *
     * @param string $routeType
     *
     * @return ExtensionInterface
     */
    public function setRouteType($routeType = null);


    /**
     * Get routeType
     *
     * @return string
     */
    public function getRouteType();


    /**
     * Set numberValue
     *
     * @param string $numberValue
     *
     * @return ExtensionInterface
     */
    public function setNumberValue($numberValue = null);


    /**
     * Get numberValue
     *
     * @return string
     */
    public function getNumberValue();


    /**
     * Set friendValue
     *
     * @param string $friendValue
     *
     * @return ExtensionInterface
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
     * @return ExtensionInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set iVRCommon
     *
     * @param \Ivoz\Domain\Model\IVRCommon\IVRCommonInterface $iVRCommon
     *
     * @return ExtensionInterface
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
     * @return ExtensionInterface
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
     * @return ExtensionInterface
     */
    public function setHuntGroup(\Ivoz\Domain\Model\HuntGroup\HuntGroupInterface $huntGroup = null);


    /**
     * Get huntGroup
     *
     * @return \Ivoz\Domain\Model\HuntGroup\HuntGroupInterface
     */
    public function getHuntGroup();


    /**
     * Set conferenceRoom
     *
     * @param \Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface $conferenceRoom
     *
     * @return ExtensionInterface
     */
    public function setConferenceRoom(\Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface $conferenceRoom = null);


    /**
     * Get conferenceRoom
     *
     * @return \Ivoz\Domain\Model\ConferenceRoom\ConferenceRoomInterface
     */
    public function getConferenceRoom();


    /**
     * Set user
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $user
     *
     * @return ExtensionInterface
     */
    public function setUser(\Ivoz\Domain\Model\User\UserInterface $user = null);


    /**
     * Get user
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getUser();


    /**
     * Set queue
     *
     * @param \Ivoz\Domain\Model\Queue\QueueInterface $queue
     *
     * @return ExtensionInterface
     */
    public function setQueue(\Ivoz\Domain\Model\Queue\QueueInterface $queue = null);


    /**
     * Get queue
     *
     * @return \Ivoz\Domain\Model\Queue\QueueInterface
     */
    public function getQueue();



}

