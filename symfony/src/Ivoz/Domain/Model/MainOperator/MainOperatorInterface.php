<?php

namespace Ivoz\Domain\Model\MainOperator;

use Core\Domain\Model\EntityInterface;

interface MainOperatorInterface extends EntityInterface
{
    /**
     * Set username
     *
     * @param string $username
     *
     * @return MainOperatorInterface
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
     * @return MainOperatorInterface
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
     * @return MainOperatorInterface
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
     * @return MainOperatorInterface
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
     * @return MainOperatorInterface
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
     * @return MainOperatorInterface
     */
    public function setLastname($lastname = null);


    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();


    /**
     * Set timezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone
     *
     * @return MainOperatorInterface
     */
    public function setTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone = null);


    /**
     * Get timezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getTimezone();



}

