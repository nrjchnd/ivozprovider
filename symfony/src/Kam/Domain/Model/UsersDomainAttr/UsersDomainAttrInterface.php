<?php

namespace Kam\Domain\Model\UsersDomainAttr;

use Core\Domain\Model\EntityInterface;

interface UsersDomainAttrInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return UsersDomainAttrInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set type
     *
     * @param integer $type
     *
     * @return UsersDomainAttrInterface
     */
    public function setType($type);


    /**
     * Get type
     *
     * @return integer
     */
    public function getType();


    /**
     * Set value
     *
     * @param string $value
     *
     * @return UsersDomainAttrInterface
     */
    public function setValue($value);


    /**
     * Get value
     *
     * @return string
     */
    public function getValue();


    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return UsersDomainAttrInterface
     */
    public function setLastModified($lastModified);


    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified();


    /**
     * Set did
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $did
     *
     * @return UsersDomainAttrInterface
     */
    public function setDid(\Ivoz\Domain\Model\Company\CompanyInterface $did);


    /**
     * Get did
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getDid();



}

