<?php

namespace Ivoz\Domain\Model\Recording;

use Core\Domain\Model\EntityInterface;

interface RecordingInterface extends EntityInterface
{
    /**
     * Set callid
     *
     * @param string $callid
     *
     * @return RecordingInterface
     */
    public function setCallid($callid = null);


    /**
     * Get callid
     *
     * @return string
     */
    public function getCallid();


    /**
     * Set calldate
     *
     * @param \DateTime $calldate
     *
     * @return RecordingInterface
     */
    public function setCalldate($calldate);


    /**
     * Get calldate
     *
     * @return \DateTime
     */
    public function getCalldate();


    /**
     * Set type
     *
     * @param string $type
     *
     * @return RecordingInterface
     */
    public function setType($type);


    /**
     * Get type
     *
     * @return string
     */
    public function getType();


    /**
     * Set duration
     *
     * @param float $duration
     *
     * @return RecordingInterface
     */
    public function setDuration($duration);


    /**
     * Get duration
     *
     * @return float
     */
    public function getDuration();


    /**
     * Set caller
     *
     * @param string $caller
     *
     * @return RecordingInterface
     */
    public function setCaller($caller = null);


    /**
     * Get caller
     *
     * @return string
     */
    public function getCaller();


    /**
     * Set callee
     *
     * @param string $callee
     *
     * @return RecordingInterface
     */
    public function setCallee($callee = null);


    /**
     * Get callee
     *
     * @return string
     */
    public function getCallee();


    /**
     * Set recorder
     *
     * @param string $recorder
     *
     * @return RecordingInterface
     */
    public function setRecorder($recorder = null);


    /**
     * Get recorder
     *
     * @return string
     */
    public function getRecorder();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return RecordingInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set recordedFile
     *
     * @param RecordedFile $recordedFile
     *
     * @return RecordingInterface
     */
    public function setRecordedFile(RecordedFile $recordedFile);


    /**
     * Get recordedFile
     *
     * @return RecordedFile
     */
    public function getRecordedFile();

}

