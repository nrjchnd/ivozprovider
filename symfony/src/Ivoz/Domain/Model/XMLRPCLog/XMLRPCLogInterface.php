<?php

namespace Ivoz\Domain\Model\XMLRPCLog;

use Core\Domain\Model\EntityInterface;

interface XMLRPCLogInterface extends EntityInterface
{
    /**
     * Set proxy
     *
     * @param string $proxy
     *
     * @return XMLRPCLogInterface
     */
    public function setProxy($proxy);


    /**
     * Get proxy
     *
     * @return string
     */
    public function getProxy();


    /**
     * Set module
     *
     * @param string $module
     *
     * @return XMLRPCLogInterface
     */
    public function setModule($module);


    /**
     * Get module
     *
     * @return string
     */
    public function getModule();


    /**
     * Set method
     *
     * @param string $method
     *
     * @return XMLRPCLogInterface
     */
    public function setMethod($method);


    /**
     * Get method
     *
     * @return string
     */
    public function getMethod();


    /**
     * Set mapperName
     *
     * @param string $mapperName
     *
     * @return XMLRPCLogInterface
     */
    public function setMapperName($mapperName);


    /**
     * Get mapperName
     *
     * @return string
     */
    public function getMapperName();


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return XMLRPCLogInterface
     */
    public function setStartDate($startDate);


    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate();


    /**
     * Set execDate
     *
     * @param \DateTime $execDate
     *
     * @return XMLRPCLogInterface
     */
    public function setExecDate($execDate = null);


    /**
     * Get execDate
     *
     * @return \DateTime
     */
    public function getExecDate();


    /**
     * Set finishDate
     *
     * @param \DateTime $finishDate
     *
     * @return XMLRPCLogInterface
     */
    public function setFinishDate($finishDate = null);


    /**
     * Get finishDate
     *
     * @return \DateTime
     */
    public function getFinishDate();



}

