<?php

namespace Kam\Domain\Model\UsersLocationAttr;

use Core\Domain\Model\EntityInterface;

interface UsersLocationAttrInterface extends EntityInterface
{
    /**
     * Set ruid
     *
     * @param string $ruid
     *
     * @return UsersLocationAttrInterface
     */
    public function setRuid($ruid);


    /**
     * Get ruid
     *
     * @return string
     */
    public function getRuid();


    /**
     * Set username
     *
     * @param string $username
     *
     * @return UsersLocationAttrInterface
     */
    public function setUsername($username);


    /**
     * Get username
     *
     * @return string
     */
    public function getUsername();


    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return UsersLocationAttrInterface
     */
    public function setDomain($domain = null);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set aname
     *
     * @param string $aname
     *
     * @return UsersLocationAttrInterface
     */
    public function setAname($aname);


    /**
     * Get aname
     *
     * @return string
     */
    public function getAname();


    /**
     * Set atype
     *
     * @param integer $atype
     *
     * @return UsersLocationAttrInterface
     */
    public function setAtype($atype);


    /**
     * Get atype
     *
     * @return integer
     */
    public function getAtype();


    /**
     * Set avalue
     *
     * @param string $avalue
     *
     * @return UsersLocationAttrInterface
     */
    public function setAvalue($avalue);


    /**
     * Get avalue
     *
     * @return string
     */
    public function getAvalue();


    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return UsersLocationAttrInterface
     */
    public function setLastModified($lastModified);


    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified();



}

