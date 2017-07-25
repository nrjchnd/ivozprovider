<?php

namespace Ivoz\Domain\Model\Terminal;

use Core\Domain\Model\EntityInterface;

interface TerminalInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return TerminalInterface
     */
    public function setName($name = null);


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
     * @return TerminalInterface
     */
    public function setDomain($domain = null);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set disallow
     *
     * @param string $disallow
     *
     * @return TerminalInterface
     */
    public function setDisallow($disallow);


    /**
     * Get disallow
     *
     * @return string
     */
    public function getDisallow();


    /**
     * Set allowAudio
     *
     * @param string $allowAudio
     *
     * @return TerminalInterface
     */
    public function setAllowAudio($allowAudio);


    /**
     * Get allowAudio
     *
     * @return string
     */
    public function getAllowAudio();


    /**
     * Set allowVideo
     *
     * @param string $allowVideo
     *
     * @return TerminalInterface
     */
    public function setAllowVideo($allowVideo = null);


    /**
     * Get allowVideo
     *
     * @return string
     */
    public function getAllowVideo();


    /**
     * Set directMediaMethod
     *
     * @param string $directMediaMethod
     *
     * @return TerminalInterface
     */
    public function setDirectMediaMethod($directMediaMethod);


    /**
     * Get directMediaMethod
     *
     * @return string
     */
    public function getDirectMediaMethod();


    /**
     * Set password
     *
     * @param string $password
     *
     * @return TerminalInterface
     */
    public function setPassword($password);


    /**
     * Get password
     *
     * @return string
     */
    public function getPassword();


    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return TerminalInterface
     */
    public function setMac($mac = null);


    /**
     * Get mac
     *
     * @return string
     */
    public function getMac();


    /**
     * Set lastProvisionDate
     *
     * @param \DateTime $lastProvisionDate
     *
     * @return TerminalInterface
     */
    public function setLastProvisionDate($lastProvisionDate = null);


    /**
     * Get lastProvisionDate
     *
     * @return \DateTime
     */
    public function getLastProvisionDate();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return TerminalInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set terminalModel
     *
     * @param \Ivoz\Domain\Model\TerminalModel\TerminalModelInterface $terminalModel
     *
     * @return TerminalInterface
     */
    public function setTerminalModel(\Ivoz\Domain\Model\TerminalModel\TerminalModelInterface $terminalModel = null);


    /**
     * Get terminalModel
     *
     * @return \Ivoz\Domain\Model\TerminalModel\TerminalModelInterface
     */
    public function getTerminalModel();



}

