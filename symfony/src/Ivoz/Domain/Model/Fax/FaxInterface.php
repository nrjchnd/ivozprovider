<?php

namespace Ivoz\Domain\Model\Fax;

use Core\Domain\Model\EntityInterface;

interface FaxInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return FaxInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set email
     *
     * @param string $email
     *
     * @return FaxInterface
     */
    public function setEmail($email = null);


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();


    /**
     * Set sendByEmail
     *
     * @param boolean $sendByEmail
     *
     * @return FaxInterface
     */
    public function setSendByEmail($sendByEmail);


    /**
     * Get sendByEmail
     *
     * @return boolean
     */
    public function getSendByEmail();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return FaxInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set outgoingDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return FaxInterface
     */
    public function setOutgoingDDI(\Ivoz\Domain\Model\DDI\DDIInterface $outgoingDDI = null);


    /**
     * Get outgoingDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();



}

