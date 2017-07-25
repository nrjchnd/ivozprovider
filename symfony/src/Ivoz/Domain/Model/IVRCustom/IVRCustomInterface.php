<?php

namespace Ivoz\Domain\Model\IVRCustom;

use Core\Domain\Model\EntityInterface;

interface IVRCustomInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return IVRCustomInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set timeout
     *
     * @param integer $timeout
     *
     * @return IVRCustomInterface
     */
    public function setTimeout($timeout);


    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout();


    /**
     * Set maxDigits
     *
     * @param integer $maxDigits
     *
     * @return IVRCustomInterface
     */
    public function setMaxDigits($maxDigits);


    /**
     * Get maxDigits
     *
     * @return integer
     */
    public function getMaxDigits();


    /**
     * Set noAnswerTimeout
     *
     * @param integer $noAnswerTimeout
     *
     * @return IVRCustomInterface
     */
    public function setNoAnswerTimeout($noAnswerTimeout = null);


    /**
     * Get noAnswerTimeout
     *
     * @return integer
     */
    public function getNoAnswerTimeout();


    /**
     * Set timeoutTargetType
     *
     * @param string $timeoutTargetType
     *
     * @return IVRCustomInterface
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
     * @return IVRCustomInterface
     */
    public function setTimeoutNumberValue($timeoutNumberValue = null);


    /**
     * Get timeoutNumberValue
     *
     * @return string
     */
    public function getTimeoutNumberValue();


    /**
     * Set errorTargetType
     *
     * @param string $errorTargetType
     *
     * @return IVRCustomInterface
     */
    public function setErrorTargetType($errorTargetType = null);


    /**
     * Get errorTargetType
     *
     * @return string
     */
    public function getErrorTargetType();


    /**
     * Set errorNumberValue
     *
     * @param string $errorNumberValue
     *
     * @return IVRCustomInterface
     */
    public function setErrorNumberValue($errorNumberValue = null);


    /**
     * Get errorNumberValue
     *
     * @return string
     */
    public function getErrorNumberValue();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return IVRCustomInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set welcomeLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $welcomeLocution
     *
     * @return IVRCustomInterface
     */
    public function setWelcomeLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $welcomeLocution = null);


    /**
     * Get welcomeLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getWelcomeLocution();


    /**
     * Set noAnswerLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $noAnswerLocution
     *
     * @return IVRCustomInterface
     */
    public function setNoAnswerLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $noAnswerLocution = null);


    /**
     * Get noAnswerLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getNoAnswerLocution();


    /**
     * Set errorLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $errorLocution
     *
     * @return IVRCustomInterface
     */
    public function setErrorLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $errorLocution = null);


    /**
     * Get errorLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getErrorLocution();


    /**
     * Set successLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $successLocution
     *
     * @return IVRCustomInterface
     */
    public function setSuccessLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $successLocution = null);


    /**
     * Get successLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getSuccessLocution();


    /**
     * Set timeoutExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $timeoutExtension
     *
     * @return IVRCustomInterface
     */
    public function setTimeoutExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $timeoutExtension = null);


    /**
     * Get timeoutExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getTimeoutExtension();


    /**
     * Set errorExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $errorExtension
     *
     * @return IVRCustomInterface
     */
    public function setErrorExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $errorExtension = null);


    /**
     * Get errorExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getErrorExtension();


    /**
     * Set timeoutVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $timeoutVoiceMailUser
     *
     * @return IVRCustomInterface
     */
    public function setTimeoutVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $timeoutVoiceMailUser = null);


    /**
     * Get timeoutVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getTimeoutVoiceMailUser();


    /**
     * Set errorVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $errorVoiceMailUser
     *
     * @return IVRCustomInterface
     */
    public function setErrorVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $errorVoiceMailUser = null);


    /**
     * Get errorVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getErrorVoiceMailUser();



}

