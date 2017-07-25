<?php

namespace Kam\Domain\Model\UsersXcap;

use Core\Domain\Model\EntityInterface;

interface UsersXcapInterface extends EntityInterface
{
    /**
     * Set username
     *
     * @param string $username
     *
     * @return UsersXcapInterface
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
     * @return UsersXcapInterface
     */
    public function setDomain($domain);


    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();


    /**
     * Set doc
     *
     * @param string $doc
     *
     * @return UsersXcapInterface
     */
    public function setDoc($doc);


    /**
     * Get doc
     *
     * @return string
     */
    public function getDoc();


    /**
     * Set docType
     *
     * @param integer $docType
     *
     * @return UsersXcapInterface
     */
    public function setDocType($docType);


    /**
     * Get docType
     *
     * @return integer
     */
    public function getDocType();


    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return UsersXcapInterface
     */
    public function setEtag($etag);


    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag();


    /**
     * Set source
     *
     * @param integer $source
     *
     * @return UsersXcapInterface
     */
    public function setSource($source);


    /**
     * Get source
     *
     * @return integer
     */
    public function getSource();


    /**
     * Set docUri
     *
     * @param string $docUri
     *
     * @return UsersXcapInterface
     */
    public function setDocUri($docUri);


    /**
     * Get docUri
     *
     * @return string
     */
    public function getDocUri();


    /**
     * Set port
     *
     * @param integer $port
     *
     * @return UsersXcapInterface
     */
    public function setPort($port);


    /**
     * Get port
     *
     * @return integer
     */
    public function getPort();



}

