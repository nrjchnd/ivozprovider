<?php

namespace Kam\Domain\Model\UsersPresentity;

use Core\Domain\Model\EntityInterface;

interface UsersPresentityInterface extends EntityInterface
{
    /**
     * Set username
     *
     * @param string $username
     *
     * @return UsersPresentityInterface
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
     * @return UsersPresentityInterface
     */
    public function setDomain($domain);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set event
     *
     * @param string $event
     *
     * @return UsersPresentityInterface
     */
    public function setEvent($event);


    /**
     * Get event
     *
     * @return string
     */
    public function getEvent();


    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return UsersPresentityInterface
     */
    public function setEtag($etag);


    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag();


    /**
     * Set expires
     *
     * @param integer $expires
     *
     * @return UsersPresentityInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return integer
     */
    public function getExpires();


    /**
     * Set receivedTime
     *
     * @param integer $receivedTime
     *
     * @return UsersPresentityInterface
     */
    public function setReceivedTime($receivedTime);


    /**
     * Get receivedTime
     *
     * @return integer
     */
    public function getReceivedTime();


    /**
     * Set body
     *
     * @param string $body
     *
     * @return UsersPresentityInterface
     */
    public function setBody($body);


    /**
     * Get body
     *
     * @return string
     */
    public function getBody();


    /**
     * Set sender
     *
     * @param string $sender
     *
     * @return UsersPresentityInterface
     */
    public function setSender($sender);


    /**
     * Get sender
     *
     * @return string
     */
    public function getSender();


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return UsersPresentityInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority();



}

