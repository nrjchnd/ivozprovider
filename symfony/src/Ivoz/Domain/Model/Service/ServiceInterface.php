<?php

namespace Ivoz\Domain\Model\Service;

use Core\Domain\Model\EntityInterface;

interface ServiceInterface extends EntityInterface
{
    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return ServiceInterface
     */
    public function setIden($iden);


    /**
     * Get iden
     *
     * @return string
     */
    public function getIden();


    /**
     * Set defaultCode
     *
     * @param string $defaultCode
     *
     * @return ServiceInterface
     */
    public function setDefaultCode($defaultCode);


    /**
     * Get defaultCode
     *
     * @return string
     */
    public function getDefaultCode();


    /**
     * Set extraArgs
     *
     * @param boolean $extraArgs
     *
     * @return ServiceInterface
     */
    public function setExtraArgs($extraArgs);


    /**
     * Get extraArgs
     *
     * @return boolean
     */
    public function getExtraArgs();


    /**
     * Set name
     *
     * @param Name $name
     *
     * @return ServiceInterface
     */
    public function setName(Name $name);


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();


    /**
     * Set description
     *
     * @param Description $description
     *
     * @return ServiceInterface
     */
    public function setDescription(Description $description);


    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription();

}

