<?php

namespace Ivoz\Domain\Model\Schedule;

use Core\Domain\Model\EntityInterface;

interface ScheduleInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return ScheduleInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set timeIn
     *
     * @param \DateTime $timeIn
     *
     * @return ScheduleInterface
     */
    public function setTimeIn($timeIn);


    /**
     * Get timeIn
     *
     * @return \DateTime
     */
    public function getTimeIn();


    /**
     * Set timeout
     *
     * @param \DateTime $timeout
     *
     * @return ScheduleInterface
     */
    public function setTimeout($timeout);


    /**
     * Get timeout
     *
     * @return \DateTime
     */
    public function getTimeout();


    /**
     * Set monday
     *
     * @param boolean $monday
     *
     * @return ScheduleInterface
     */
    public function setMonday($monday = null);


    /**
     * Get monday
     *
     * @return boolean
     */
    public function getMonday();


    /**
     * Set tuesday
     *
     * @param boolean $tuesday
     *
     * @return ScheduleInterface
     */
    public function setTuesday($tuesday = null);


    /**
     * Get tuesday
     *
     * @return boolean
     */
    public function getTuesday();


    /**
     * Set wednesday
     *
     * @param boolean $wednesday
     *
     * @return ScheduleInterface
     */
    public function setWednesday($wednesday = null);


    /**
     * Get wednesday
     *
     * @return boolean
     */
    public function getWednesday();


    /**
     * Set thursday
     *
     * @param boolean $thursday
     *
     * @return ScheduleInterface
     */
    public function setThursday($thursday = null);


    /**
     * Get thursday
     *
     * @return boolean
     */
    public function getThursday();


    /**
     * Set friday
     *
     * @param boolean $friday
     *
     * @return ScheduleInterface
     */
    public function setFriday($friday = null);


    /**
     * Get friday
     *
     * @return boolean
     */
    public function getFriday();


    /**
     * Set saturday
     *
     * @param boolean $saturday
     *
     * @return ScheduleInterface
     */
    public function setSaturday($saturday = null);


    /**
     * Get saturday
     *
     * @return boolean
     */
    public function getSaturday();


    /**
     * Set sunday
     *
     * @param boolean $sunday
     *
     * @return ScheduleInterface
     */
    public function setSunday($sunday = null);


    /**
     * Get sunday
     *
     * @return boolean
     */
    public function getSunday();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return ScheduleInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

