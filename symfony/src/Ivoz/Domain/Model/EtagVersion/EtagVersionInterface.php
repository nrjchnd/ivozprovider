<?php

namespace Ivoz\Domain\Model\EtagVersion;

use Core\Domain\Model\EntityInterface;

interface EtagVersionInterface extends EntityInterface
{
    /**
     * Set table
     *
     * @param string $table
     *
     * @return EtagVersionInterface
     */
    public function setTable($table = null);


    /**
     * Get table
     *
     * @return string
     */
    public function getTable();


    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return EtagVersionInterface
     */
    public function setEtag($etag = null);


    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag();


    /**
     * Set lastChange
     *
     * @param \DateTime $lastChange
     *
     * @return EtagVersionInterface
     */
    public function setLastChange($lastChange = null);


    /**
     * Get lastChange
     *
     * @return \DateTime
     */
    public function getLastChange();



}

