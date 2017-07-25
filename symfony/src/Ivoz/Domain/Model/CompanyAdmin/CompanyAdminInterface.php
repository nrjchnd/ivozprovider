<?php

namespace Ivoz\Domain\Model\CompanyAdmin;

use Core\Domain\Model\EntityInterface;

interface CompanyAdminInterface extends EntityInterface
{
    /**
     * Set username
     *
     * @param string $username
     *
     * @return CompanyAdminInterface
     */
    public function setUsername($username);


    /**
     * Get username
     *
     * @return string
     */
    public function getUsername();


    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return CompanyAdminInterface
     */
    public function setPass($pass);


    /**
     * Get pass
     *
     * @return string
     */
    public function getPass();


    /**
     * Set email
     *
     * @param string $email
     *
     * @return CompanyAdminInterface
     */
    public function setEmail($email);


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();


    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return CompanyAdminInterface
     */
    public function setActive($active);


    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return CompanyAdminInterface
     */
    public function setName($name = null);


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
     * @return CompanyAdminInterface
     */
    public function setLastname($lastname = null);


    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return CompanyAdminInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set timezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone
     *
     * @return CompanyAdminInterface
     */
    public function setTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone = null);


    /**
     * Get timezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getTimezone();



}

