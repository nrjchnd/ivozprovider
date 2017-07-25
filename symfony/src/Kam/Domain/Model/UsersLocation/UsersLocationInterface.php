<?php

namespace Kam\Domain\Model\UsersLocation;

use Core\Domain\Model\EntityInterface;

interface UsersLocationInterface extends EntityInterface
{
    /**
     * Set ruid
     *
     * @param string $ruid
     *
     * @return UsersLocationInterface
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
     * @return UsersLocationInterface
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
     * @return UsersLocationInterface
     */
    public function setDomain($domain = null);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return UsersLocationInterface
     */
    public function setContact($contact);


    /**
     * Get contact
     *
     * @return string
     */
    public function getContact();


    /**
     * Set received
     *
     * @param string $received
     *
     * @return UsersLocationInterface
     */
    public function setReceived($received = null);


    /**
     * Get received
     *
     * @return string
     */
    public function getReceived();


    /**
     * Set path
     *
     * @param string $path
     *
     * @return UsersLocationInterface
     */
    public function setPath($path = null);


    /**
     * Get path
     *
     * @return string
     */
    public function getPath();


    /**
     * Set expires
     *
     * @param \DateTime $expires
     *
     * @return UsersLocationInterface
     */
    public function setExpires($expires);


    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires();


    /**
     * Set q
     *
     * @param float $q
     *
     * @return UsersLocationInterface
     */
    public function setQ($q);


    /**
     * Get q
     *
     * @return float
     */
    public function getQ();


    /**
     * Set callid
     *
     * @param string $callid
     *
     * @return UsersLocationInterface
     */
    public function setCallid($callid);


    /**
     * Get callid
     *
     * @return string
     */
    public function getCallid();


    /**
     * Set cseq
     *
     * @param integer $cseq
     *
     * @return UsersLocationInterface
     */
    public function setCseq($cseq);


    /**
     * Get cseq
     *
     * @return integer
     */
    public function getCseq();


    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return UsersLocationInterface
     */
    public function setLastModified($lastModified);


    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified();


    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return UsersLocationInterface
     */
    public function setFlags($flags);


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Set cflags
     *
     * @param integer $cflags
     *
     * @return UsersLocationInterface
     */
    public function setCflags($cflags);


    /**
     * Get cflags
     *
     * @return integer
     */
    public function getCflags();


    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return UsersLocationInterface
     */
    public function setUserAgent($userAgent);


    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent();


    /**
     * Set socket
     *
     * @param string $socket
     *
     * @return UsersLocationInterface
     */
    public function setSocket($socket = null);


    /**
     * Get socket
     *
     * @return string
     */
    public function getSocket();


    /**
     * Set methods
     *
     * @param integer $methods
     *
     * @return UsersLocationInterface
     */
    public function setMethods($methods = null);


    /**
     * Get methods
     *
     * @return integer
     */
    public function getMethods();


    /**
     * Set instance
     *
     * @param string $instance
     *
     * @return UsersLocationInterface
     */
    public function setInstance($instance = null);


    /**
     * Get instance
     *
     * @return string
     */
    public function getInstance();


    /**
     * Set regId
     *
     * @param integer $regId
     *
     * @return UsersLocationInterface
     */
    public function setRegId($regId);


    /**
     * Get regId
     *
     * @return integer
     */
    public function getRegId();


    /**
     * Set serverId
     *
     * @param integer $serverId
     *
     * @return UsersLocationInterface
     */
    public function setServerId($serverId);


    /**
     * Get serverId
     *
     * @return integer
     */
    public function getServerId();


    /**
     * Set connectionId
     *
     * @param integer $connectionId
     *
     * @return UsersLocationInterface
     */
    public function setConnectionId($connectionId);


    /**
     * Get connectionId
     *
     * @return integer
     */
    public function getConnectionId();


    /**
     * Set keepalive
     *
     * @param integer $keepalive
     *
     * @return UsersLocationInterface
     */
    public function setKeepalive($keepalive);


    /**
     * Get keepalive
     *
     * @return integer
     */
    public function getKeepalive();


    /**
     * Set partition
     *
     * @param integer $partition
     *
     * @return UsersLocationInterface
     */
    public function setPartition($partition);


    /**
     * Get partition
     *
     * @return integer
     */
    public function getPartition();



}

