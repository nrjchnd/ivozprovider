<?php

namespace Ivoz\Domain\Model\CallForwardSetting;

use Core\Domain\Model\EntityInterface;

interface CallForwardSettingInterface extends EntityInterface
{
    /**
     * Set callTypeFilter
     *
     * @param string $callTypeFilter
     *
     * @return CallForwardSettingInterface
     */
    public function setCallTypeFilter($callTypeFilter);


    /**
     * Get callTypeFilter
     *
     * @return string
     */
    public function getCallTypeFilter();


    /**
     * Set callForwardType
     *
     * @param string $callForwardType
     *
     * @return CallForwardSettingInterface
     */
    public function setCallForwardType($callForwardType);


    /**
     * Get callForwardType
     *
     * @return string
     */
    public function getCallForwardType();


    /**
     * Set targetType
     *
     * @param string $targetType
     *
     * @return CallForwardSettingInterface
     */
    public function setTargetType($targetType);


    /**
     * Get targetType
     *
     * @return string
     */
    public function getTargetType();


    /**
     * Set numberValue
     *
     * @param string $numberValue
     *
     * @return CallForwardSettingInterface
     */
    public function setNumberValue($numberValue = null);


    /**
     * Get numberValue
     *
     * @return string
     */
    public function getNumberValue();


    /**
     * Set noAnswerTimeout
     *
     * @param integer $noAnswerTimeout
     *
     * @return CallForwardSettingInterface
     */
    public function setNoAnswerTimeout($noAnswerTimeout);


    /**
     * Get noAnswerTimeout
     *
     * @return integer
     */
    public function getNoAnswerTimeout();


    /**
     * Set user
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $user
     *
     * @return CallForwardSettingInterface
     */
    public function setUser(\Ivoz\Domain\Model\User\UserInterface $user);


    /**
     * Get user
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getUser();


    /**
     * Set extension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $extension
     *
     * @return CallForwardSettingInterface
     */
    public function setExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $extension = null);


    /**
     * Get extension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getExtension();


    /**
     * Set voiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $voiceMailUser
     *
     * @return CallForwardSettingInterface
     */
    public function setVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $voiceMailUser = null);


    /**
     * Get voiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getVoiceMailUser();



}

