<?php

namespace Ivoz\Domain\Model\IVRCustomEntry;

use Core\Domain\Model\EntityInterface;

interface IVRCustomEntryInterface extends EntityInterface
{
    /**
     * Set entry
     *
     * @param string $entry
     *
     * @return IVRCustomEntryInterface
     */
    public function setEntry($entry);


    /**
     * Get entry
     *
     * @return string
     */
    public function getEntry();


    /**
     * Set targetType
     *
     * @param string $targetType
     *
     * @return IVRCustomEntryInterface
     */
    public function setTargetType($targetType);


    /**
     * Get targetType
     *
     * @return string
     */
    public function getTargetType();


    /**
     * Set targetNumberValue
     *
     * @param string $targetNumberValue
     *
     * @return IVRCustomEntryInterface
     */
    public function setTargetNumberValue($targetNumberValue = null);


    /**
     * Get targetNumberValue
     *
     * @return string
     */
    public function getTargetNumberValue();


    /**
     * Set iVRCustom
     *
     * @param \Ivoz\Domain\Model\IVRCustom\IVRCustomInterface $iVRCustom
     *
     * @return IVRCustomEntryInterface
     */
    public function setIVRCustom(\Ivoz\Domain\Model\IVRCustom\IVRCustomInterface $iVRCustom);


    /**
     * Get iVRCustom
     *
     * @return \Ivoz\Domain\Model\IVRCustom\IVRCustomInterface
     */
    public function getIVRCustom();


    /**
     * Set welcomeLocution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $welcomeLocution
     *
     * @return IVRCustomEntryInterface
     */
    public function setWelcomeLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $welcomeLocution = null);


    /**
     * Get welcomeLocution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getWelcomeLocution();


    /**
     * Set targetExtension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $targetExtension
     *
     * @return IVRCustomEntryInterface
     */
    public function setTargetExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $targetExtension = null);


    /**
     * Get targetExtension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getTargetExtension();


    /**
     * Set targetVoiceMailUser
     *
     * @param \Ivoz\Domain\Model\User\UserInterface $targetVoiceMailUser
     *
     * @return IVRCustomEntryInterface
     */
    public function setTargetVoiceMailUser(\Ivoz\Domain\Model\User\UserInterface $targetVoiceMailUser = null);


    /**
     * Get targetVoiceMailUser
     *
     * @return \Ivoz\Domain\Model\User\UserInterface
     */
    public function getTargetVoiceMailUser();



}

