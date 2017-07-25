<?php

namespace Kam\Domain\Model\TrunksDomainAttr;

use Core\Domain\Model\EntityInterface;

interface TrunksDomainAttrInterface extends EntityInterface
{
    /**
     * Set did
     *
     * @param string $did
     *
     * @return TrunksDomainAttrInterface
     */
    public function setDid($did);


    /**
     * Get did
     *
     * @return string
     */
    public function getDid();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return TrunksDomainAttrInterface
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
     * @return TrunksDomainAttrInterface
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
     * @return TrunksDomainAttrInterface
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
     * @return TrunksDomainAttrInterface
     */
    public function setLastModified($lastModified);


    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified();



}

