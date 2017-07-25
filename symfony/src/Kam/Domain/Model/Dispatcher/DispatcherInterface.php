<?php

namespace Kam\Domain\Model\Dispatcher;

use Core\Domain\Model\EntityInterface;

interface DispatcherInterface extends EntityInterface
{
    /**
     * Set setid
     *
     * @param integer $setid
     *
     * @return DispatcherInterface
     */
    public function setSetid($setid);


    /**
     * Get setid
     *
     * @return integer
     */
    public function getSetid();


    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return DispatcherInterface
     */
    public function setDestination($destination);


    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination();


    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return DispatcherInterface
     */
    public function setFlags($flags);


    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags();


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return DispatcherInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority();


    /**
     * Set attrs
     *
     * @param string $attrs
     *
     * @return DispatcherInterface
     */
    public function setAttrs($attrs);


    /**
     * Get attrs
     *
     * @return string
     */
    public function getAttrs();


    /**
     * Set description
     *
     * @param string $description
     *
     * @return DispatcherInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set applicationServer
     *
     * @param \Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface $applicationServer
     *
     * @return DispatcherInterface
     */
    public function setApplicationServer(\Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface $applicationServer);


    /**
     * Get applicationServer
     *
     * @return \Ivoz\Domain\Model\ApplicationServer\ApplicationServerInterface
     */
    public function getApplicationServer();



}

