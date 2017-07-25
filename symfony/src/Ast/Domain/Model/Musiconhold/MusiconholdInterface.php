<?php

namespace Ast\Domain\Model\Musiconhold;

use Core\Domain\Model\EntityInterface;

interface MusiconholdInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return MusiconholdInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return MusiconholdInterface
     */
    public function setMode($mode = null);


    /**
     * Get mode
     *
     * @return string
     */
    public function getMode();


    /**
     * Set directory
     *
     * @param string $directory
     *
     * @return MusiconholdInterface
     */
    public function setDirectory($directory = null);


    /**
     * Get directory
     *
     * @return string
     */
    public function getDirectory();


    /**
     * Set application
     *
     * @param string $application
     *
     * @return MusiconholdInterface
     */
    public function setApplication($application = null);


    /**
     * Get application
     *
     * @return string
     */
    public function getApplication();


    /**
     * Set digit
     *
     * @param string $digit
     *
     * @return MusiconholdInterface
     */
    public function setDigit($digit = null);


    /**
     * Get digit
     *
     * @return string
     */
    public function getDigit();


    /**
     * Set sort
     *
     * @param string $sort
     *
     * @return MusiconholdInterface
     */
    public function setSort($sort = null);


    /**
     * Get sort
     *
     * @return string
     */
    public function getSort();


    /**
     * Set format
     *
     * @param string $format
     *
     * @return MusiconholdInterface
     */
    public function setFormat($format = null);


    /**
     * Get format
     *
     * @return string
     */
    public function getFormat();


    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return MusiconholdInterface
     */
    public function setStamp($stamp = null);


    /**
     * Get stamp
     *
     * @return \DateTime
     */
    public function getStamp();



}

