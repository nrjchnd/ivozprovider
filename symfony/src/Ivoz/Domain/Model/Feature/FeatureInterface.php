<?php

namespace Ivoz\Domain\Model\Feature;

use Core\Domain\Model\EntityInterface;

interface FeatureInterface extends EntityInterface
{
    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return FeatureInterface
     */
    public function setIden($iden);


    /**
     * Get iden
     *
     * @return string
     */
    public function getIden();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return FeatureInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set nameEn
     *
     * @param string $nameEn
     *
     * @return FeatureInterface
     */
    public function setNameEn($nameEn);


    /**
     * Get nameEn
     *
     * @return string
     */
    public function getNameEn();


    /**
     * Set nameEs
     *
     * @param string $nameEs
     *
     * @return FeatureInterface
     */
    public function setNameEs($nameEs);


    /**
     * Get nameEs
     *
     * @return string
     */
    public function getNameEs();



}

