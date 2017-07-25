<?php

namespace Ivoz\Domain\Model\BrandOperator;

use Core\Domain\Model\EntityInterface;

interface BrandOperatorInterface extends EntityInterface
{
    /**
     * Set username
     *
     * @param string $username
     *
     * @return BrandOperatorInterface
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
     * @return BrandOperatorInterface
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
     * @return BrandOperatorInterface
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
     * @return BrandOperatorInterface
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
     * @return BrandOperatorInterface
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
     * @return BrandOperatorInterface
     */
    public function setLastname($lastname = null);


    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return BrandOperatorInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set timezone
     *
     * @param \Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone
     *
     * @return BrandOperatorInterface
     */
    public function setTimezone(\Ivoz\Domain\Model\Timezone\TimezoneInterface $timezone = null);


    /**
     * Get timezone
     *
     * @return \Ivoz\Domain\Model\Timezone\TimezoneInterface
     */
    public function getTimezone();



}

