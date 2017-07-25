<?php

namespace Kam\Domain\Model\UsersHtable;

use Core\Domain\Model\EntityInterface;

interface UsersHtableInterface extends EntityInterface
{
    /**
     * Set keyName
     *
     * @param string $keyName
     *
     * @return UsersHtableInterface
     */
    public function setKeyName($keyName);


    /**
     * Get keyName
     *
     * @return string
     */
    public function getKeyName();


    /**
     * Set keyType
     *
     * @param integer $keyType
     *
     * @return UsersHtableInterface
     */
    public function setKeyType($keyType);


    /**
     * Get keyType
     *
     * @return integer
     */
    public function getKeyType();


    /**
     * Set valueType
     *
     * @param integer $valueType
     *
     * @return UsersHtableInterface
     */
    public function setValueType($valueType);


    /**
     * Get valueType
     *
     * @return integer
     */
    public function getValueType();


    /**
     * Set keyValue
     *
     * @param string $keyValue
     *
     * @return UsersHtableInterface
     */
    public function setKeyValue($keyValue);


    /**
     * Get keyValue
     *
     * @return string
     */
    public function getKeyValue();


    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return UsersHtableInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();



}

