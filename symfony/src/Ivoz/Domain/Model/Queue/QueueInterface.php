<?php

namespace Ivoz\Domain\Model\Queue;

use Core\Domain\Model\EntityInterface;

interface QueueInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return QueueInterface
     */
    public function setName($name = null);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set maxWaitTime
     *
     * @param integer $maxWaitTime
     *
     * @return QueueInterface
     */
    public function setMaxWaitTime($maxWaitTime = null);


    /**
     * Get maxWaitTime
     *
     * @return integer
     */
    public function getMaxWaitTime();


    /**
     * Set timeoutTargetType
     *
     * @param string $timeoutTargetType
     *
     * @return QueueInterface
     */
    public function setTimeoutTargetType($timeoutTargetType = null);


    /**
     * Get timeoutTargetType
     *
     * @return string
     */
    public function getTimeoutTargetType();


    /**
     * Set timeoutNumberValue
     *
     * @param string $timeoutNumberValue
     *
     * @return QueueInterface
     */
    public function setTimeoutNumberValue($timeoutNumberValue = null);


    /**
     * Get timeoutNumberValue
     *
     * @return string
     */
    public function getTimeoutNumberValue();


    /**
     * Set maxlen
     *
     * @param integer $maxlen
     *
     * @return QueueInterface
     */
    public function setMaxlen($maxlen = null);


    /**
     * Get maxlen
     *
     * @return integer
     */
    public function getMaxlen();


    /**
     * Set fullTargetType
     *
     * @param string $fullTargetType
     *
     * @return QueueInterface
     */
    public function setFullTargetType($fullTargetType = null);


    /**
     * Get fullTargetType
     *
     * @return string
     */
    public function getFullTargetType();


    /**
     * Set fullNumberValue
     *
     * @param string $fullNumberValue
     *
     * @return QueueInterface
     */
    public function setFullNumberValue($fullNumberValue = null);


    /**
     * Get fullNumberValue
     *
     * @return string
     */
    public function getFullNumberValue();


    /**
     * Set periodicAnnounceFrequency
     *
     * @param integer $periodicAnnounceFrequency
     *
     * @return QueueInterface
     */
    public function setPeriodicAnnounceFrequency($periodicAnnounceFrequency = null);


    /**
     * Get periodicAnnounceFrequency
     *
     * @return integer
     */
    public function getPeriodicAnnounceFrequency();


    /**
     * Set memberCallRest
     *
     * @param integer $memberCallRest
     *
     * @return QueueInterface
     */
    public function setMemberCallRest($memberCallRest = null);


    /**
     * Get memberCallRest
     *
     * @return integer
     */
    public function getMemberCallRest();


    /**
     * Set memberCallTimeout
     *
     * @param integer $memberCallTimeout
     *
     * @return QueueInterface
     */
    public function setMemberCallTimeout($memberCallTimeout = null);


    /**
     * Get memberCallTimeout
     *
     * @return integer
     */
    public function getMemberCallTimeout();


    /**
     * Set strategy
     *
     * @param string $strategy
     *
     * @return QueueInterface
     */
    public function setStrategy($strategy = null);


    /**
     * Get strategy
     *
     * @return string
     */
    public function getStrategy();


    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return QueueInterface
     */
    public function setWeight($weight = null);


    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return QueueInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set periodicAnnounceLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $periodicAnnounceLocution
     *
     * @return QueueInterface
     */
    public function setPeriodicAnnounceLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $periodicAnnounceLocution = null);


    /**
     * Get periodicAnnounceLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getPeriodicAnnounceLocution();


    /**
     * Set timeoutLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $timeoutLocution
     *
     * @return QueueInterface
     */
    public function setTimeoutLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $timeoutLocution = null);


    /**
     * Get timeoutLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getTimeoutLocution();


    /**
     * Set timeoutExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $timeoutExtension
     *
     * @return QueueInterface
     */
    public function setTimeoutExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $timeoutExtension = null);


    /**
     * Get timeoutExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getTimeoutExtension();


    /**
     * Set timeoutVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $timeoutVoiceMailUser
     *
     * @return QueueInterface
     */
    public function setTimeoutVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $timeoutVoiceMailUser = null);


    /**
     * Get timeoutVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getTimeoutVoiceMailUser();


    /**
     * Set fullLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $fullLocution
     *
     * @return QueueInterface
     */
    public function setFullLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $fullLocution = null);


    /**
     * Get fullLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getFullLocution();


    /**
     * Set fullExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $fullExtension
     *
     * @return QueueInterface
     */
    public function setFullExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $fullExtension = null);


    /**
     * Get fullExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getFullExtension();


    /**
     * Set fullVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $fullVoiceMailUser
     *
     * @return QueueInterface
     */
    public function setFullVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $fullVoiceMailUser = null);


    /**
     * Get fullVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getFullVoiceMailUser();



}

