<?php

namespace Ivoz\Domain\Model\User;

use Core\Domain\Model\EntityInterface;

interface UserInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return UserInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return UserInterface
     */
    public function setLastname($lastname);


    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();


    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserInterface
     */
    public function setEmail($email = null);


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();


    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return UserInterface
     */
    public function setPass($pass = null);


    /**
     * Get pass
     *
     * @return string
     */
    public function getPass();


    /**
     * Set doNotDisturb
     *
     * @param boolean $doNotDisturb
     *
     * @return UserInterface
     */
    public function setDoNotDisturb($doNotDisturb);


    /**
     * Get doNotDisturb
     *
     * @return boolean
     */
    public function getDoNotDisturb();


    /**
     * Set isBoss
     *
     * @param boolean $isBoss
     *
     * @return UserInterface
     */
    public function setIsBoss($isBoss);


    /**
     * Get isBoss
     *
     * @return boolean
     */
    public function getIsBoss();


    /**
     * Set exceptionBoosAssistantRegExp
     *
     * @param string $exceptionBoosAssistantRegExp
     *
     * @return UserInterface
     */
    public function setExceptionBoosAssistantRegExp($exceptionBoosAssistantRegExp = null);


    /**
     * Get exceptionBoosAssistantRegExp
     *
     * @return string
     */
    public function getExceptionBoosAssistantRegExp();


    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return UserInterface
     */
    public function setActive($active);


    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive();


    /**
     * Set maxCalls
     *
     * @param integer $maxCalls
     *
     * @return UserInterface
     */
    public function setMaxCalls($maxCalls);


    /**
     * Get maxCalls
     *
     * @return integer
     */
    public function getMaxCalls();


    /**
     * Set externalIpCalls
     *
     * @param boolean $externalIpCalls
     *
     * @return UserInterface
     */
    public function setExternalIpCalls($externalIpCalls);


    /**
     * Get externalIpCalls
     *
     * @return boolean
     */
    public function getExternalIpCalls();


    /**
     * Set voicemailEnabled
     *
     * @param boolean $voicemailEnabled
     *
     * @return UserInterface
     */
    public function setVoicemailEnabled($voicemailEnabled);


    /**
     * Get voicemailEnabled
     *
     * @return boolean
     */
    public function getVoicemailEnabled();


    /**
     * Set voicemailSendMail
     *
     * @param boolean $voicemailSendMail
     *
     * @return UserInterface
     */
    public function setVoicemailSendMail($voicemailSendMail);


    /**
     * Get voicemailSendMail
     *
     * @return boolean
     */
    public function getVoicemailSendMail();


    /**
     * Set voicemailAttachSound
     *
     * @param boolean $voicemailAttachSound
     *
     * @return UserInterface
     */
    public function setVoicemailAttachSound($voicemailAttachSound);


    /**
     * Get voicemailAttachSound
     *
     * @return boolean
     */
    public function getVoicemailAttachSound();


    /**
     * Set tokenKey
     *
     * @param string $tokenKey
     *
     * @return UserInterface
     */
    public function setTokenKey($tokenKey = null);


    /**
     * Get tokenKey
     *
     * @return string
     */
    public function getTokenKey();


    /**
     * Set areaCode
     *
     * @param string $areaCode
     *
     * @return UserInterface
     */
    public function setAreaCode($areaCode = null);


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return UserInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set callACL
     *
     * @param \Ivoz\Domain\Model\CallACL\CallACLInterface $callACL
     *
     * @return UserInterface
     */
    public function setCallACL(\Ivoz\Domain\Model\CallACL\CallACLInterface $callACL = null);


    /**
     * Get callACL
     *
     * @return \Ivoz\Domain\Model\CallACL\CallACLInterface
     */
    public function getCallACL();


    /**
     * Set bossAssistant
     *
     * @param UserInterface $bossAssistant
     *
     * @return UserInterface
     */
    public function setBossAssistant(UserInterface $bossAssistant = null);


    /**
     * Get bossAssistant
     *
     * @return UserInterface
     */
    public function getBossAssistant();


    /**
     * Set country
     *
     * @param \Ivoz\Domain\Model\Country\CountryInterface $country
     *
     * @return UserInterface
     */
    public function setCountry(\Ivoz\Domain\Model\Country\CountryInterface $country = null);


    /**
     * Get country
     *
     * @return \Ivoz\Domain\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Set language
     *
     * @param \Ivoz\Domain\Model\Language\LanguageInterface $language
     *
     * @return UserInterface
     */
    public function setLanguage(\Ivoz\Domain\Model\Language\LanguageInterface $language = null);


    /**
     * Get language
     *
     * @return \Ivoz\Domain\Model\Language\LanguageInterface
     */
    public function getLanguage();


    /**
     * Set terminal
     *
     * @param \Ivoz\Domain\Model\Terminal\TerminalInterface $terminal
     *
     * @return UserInterface
     */
    public function setTerminal(\Ivoz\Domain\Model\Terminal\TerminalInterface $terminal = null);


    /**
     * Get terminal
     *
     * @return \Ivoz\Domain\Model\Terminal\TerminalInterface
     */
    public function getTerminal();


    /**
     * Set extension
     *
     * @param \Ivoz\Domain\Model\Extension\ExtensionInterface $extension
     *
     * @return UserInterface
     */
    public function setExtension(\Ivoz\Domain\Model\Extension\ExtensionInterface $extension = null);


    /**
     * Get extension
     *
     * @return \Ivoz\Domain\Model\Extension\ExtensionInterface
     */
    public function getExtension();


    /**
     * Set timezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone
     *
     * @return UserInterface
     */
    public function setTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone = null);


    /**
     * Get timezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getTimezone();


    /**
     * Set outgoingDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return UserInterface
     */
    public function setOutgoingDDI(\Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI = null);


    /**
     * Get outgoingDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();



}

