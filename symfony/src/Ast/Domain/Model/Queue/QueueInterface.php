<?php

namespace Ast\Domain\Model\Queue;

use Core\Domain\Model\EntityInterface;

interface QueueInterface extends EntityInterface
{
    /**
     * Set periodicAnnounce
     *
     * @param string $periodicAnnounce
     *
     * @return QueueInterface
     */
    public function setPeriodicAnnounce($periodicAnnounce = null);


    /**
     * Get periodicAnnounce
     *
     * @return string
     */
    public function getPeriodicAnnounce();


    /**
     * Set periodicAnnounceFrequency
     *
     * @param integer $periodicAnnounceFrequency
     *
     * @return QueueInterface
     */
    public function setPeriodicAnnounceFrequency($periodicAnnounceFrequency = null);


    /**
     * Get periodicAnnounceFrequency
     *
     * @return integer
     */
    public function getPeriodicAnnounceFrequency();


    /**
     * Set timeout
     *
     * @param integer $timeout
     *
     * @return QueueInterface
     */
    public function setTimeout($timeout = null);


    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout();


    /**
     * Set autopause
     *
     * @param string $autopause
     *
     * @return QueueInterface
     */
    public function setAutopause($autopause);


    /**
     * Get autopause
     *
     * @return string
     */
    public function getAutopause();


    /**
     * Set ringinuse
     *
     * @param string $ringinuse
     *
     * @return QueueInterface
     */
    public function setRinginuse($ringinuse);


    /**
     * Get ringinuse
     *
     * @return string
     */
    public function getRinginuse();


    /**
     * Set wrapuptime
     *
     * @param integer $wrapuptime
     *
     * @return QueueInterface
     */
    public function setWrapuptime($wrapuptime = null);


    /**
     * Get wrapuptime
     *
     * @return integer
     */
    public function getWrapuptime();


    /**
     * Set maxlen
     *
     * @param integer $maxlen
     *
     * @return QueueInterface
     */
    public function setMaxlen($maxlen = null);


    /**
     * Get maxlen
     *
     * @return integer
     */
    public function getMaxlen();


    /**
     * Set strategy
     *
     * @param string $strategy
     *
     * @return QueueInterface
     */
    public function setStrategy($strategy = null);


    /**
     * Get strategy
     *
     * @return string
     */
    public function getStrategy();


    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return QueueInterface
     */
    public function setWeight($weight = null);


    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight();


    /**
     * Set queue
     *
     * @param \Ivoz\Domain\Model\Queue\QueueInterface $queue
     *
     * @return QueueInterface
     */
    public function setQueue(\Ivoz\Domain\Model\Queue\QueueInterface $queue);


    /**
     * Get queue
     *
     * @return \Ivoz\Domain\Model\Queue\QueueInterface
     */
    public function getQueue();



}

