<?php

namespace Ast\Model\Musiconhold;



interface MusiconholdInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get mode
     *
     * @return string
     */
    public function getMode();


    /**
     * Get directory
     *
     * @return string
     */
    public function getDirectory();


    /**
     * Get application
     *
     * @return string
     */
    public function getApplication();


    /**
     * Get digit
     *
     * @return string
     */
    public function getDigit();


    /**
     * Get sort
     *
     * @return string
     */
    public function getSort();


    /**
     * Get format
     *
     * @return string
     */
    public function getFormat();


    /**
     * Get stamp
     *
     * @return \DateTime
     */
    public function getStamp();



}

