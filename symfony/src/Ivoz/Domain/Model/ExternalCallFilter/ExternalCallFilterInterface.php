<?php

namespace Ivoz\Domain\Model\ExternalCallFilter;

use Core\Domain\Model\EntityInterface;

interface ExternalCallFilterInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return ExternalCallFilterInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set holidayTargetType
     *
     * @param string $holidayTargetType
     *
     * @return ExternalCallFilterInterface
     */
    public function setHolidayTargetType($holidayTargetType = null);


    /**
     * Get holidayTargetType
     *
     * @return string
     */
    public function getHolidayTargetType();


    /**
     * Set holidayNumberValue
     *
     * @param string $holidayNumberValue
     *
     * @return ExternalCallFilterInterface
     */
    public function setHolidayNumberValue($holidayNumberValue = null);


    /**
     * Get holidayNumberValue
     *
     * @return string
     */
    public function getHolidayNumberValue();


    /**
     * Set outOfScheduleTargetType
     *
     * @param string $outOfScheduleTargetType
     *
     * @return ExternalCallFilterInterface
     */
    public function setOutOfScheduleTargetType($outOfScheduleTargetType = null);


    /**
     * Get outOfScheduleTargetType
     *
     * @return string
     */
    public function getOutOfScheduleTargetType();


    /**
     * Set outOfScheduleNumberValue
     *
     * @param string $outOfScheduleNumberValue
     *
     * @return ExternalCallFilterInterface
     */
    public function setOutOfScheduleNumberValue($outOfScheduleNumberValue = null);


    /**
     * Get outOfScheduleNumberValue
     *
     * @return string
     */
    public function getOutOfScheduleNumberValue();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return ExternalCallFilterInterface
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
     * @return ExternalCallFilterInterface
     */
    public function setWelcomeLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $welcomeLocution = null);


    /**
     * Get welcomeLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getWelcomeLocution();


    /**
     * Set holidayLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $holidayLocution
     *
     * @return ExternalCallFilterInterface
     */
    public function setHolidayLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $holidayLocution = null);


    /**
     * Get holidayLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getHolidayLocution();


    /**
     * Set outOfScheduleLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $outOfScheduleLocution
     *
     * @return ExternalCallFilterInterface
     */
    public function setOutOfScheduleLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $outOfScheduleLocution = null);


    /**
     * Get outOfScheduleLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getOutOfScheduleLocution();


    /**
     * Set holidayExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $holidayExtension
     *
     * @return ExternalCallFilterInterface
     */
    public function setHolidayExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $holidayExtension = null);


    /**
     * Get holidayExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getHolidayExtension();


    /**
     * Set outOfScheduleExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $outOfScheduleExtension
     *
     * @return ExternalCallFilterInterface
     */
    public function setOutOfScheduleExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $outOfScheduleExtension = null);


    /**
     * Get outOfScheduleExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getOutOfScheduleExtension();


    /**
     * Set holidayVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $holidayVoiceMailUser
     *
     * @return ExternalCallFilterInterface
     */
    public function setHolidayVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $holidayVoiceMailUser = null);


    /**
     * Get holidayVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getHolidayVoiceMailUser();


    /**
     * Set outOfScheduleVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $outOfScheduleVoiceMailUser
     *
     * @return ExternalCallFilterInterface
     */
    public function setOutOfScheduleVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $outOfScheduleVoiceMailUser = null);


    /**
     * Get outOfScheduleVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getOutOfScheduleVoiceMailUser();



}

