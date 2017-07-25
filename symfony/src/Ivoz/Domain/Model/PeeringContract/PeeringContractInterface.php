<?php

namespace Ivoz\Domain\Model\PeeringContract;

use Core\Domain\Model\EntityInterface;

interface PeeringContractInterface extends EntityInterface
{
    /**
     * Set description
     *
     * @param string $description
     *
     * @return PeeringContractInterface
     */
    public function setDescription($description);


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set name
     *
     * @param string $name
     *
     * @return PeeringContractInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set externallyRated
     *
     * @param boolean $externallyRated
     *
     * @return PeeringContractInterface
     */
    public function setExternallyRated($externallyRated = null);


    /**
     * Get externallyRated
     *
     * @return boolean
     */
    public function getExternallyRated();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return PeeringContractInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set transformationRulesetGroupsTrunk
     *
     * @param \Ivoz\Domain\Model\TransformationRulesetGroupsTrunk\TransformationRulesetGroupsTrunkInterface $transformationRulesetGroupsTrunk
     *
     * @return PeeringContractInterface
     */
    public function setTransformationRulesetGroupsTrunk(\Ivoz\Domain\Model\TransformationRulesetGroupsTrunk\TransformationRulesetGroupsTrunkInterface $transformationRulesetGroupsTrunk = null);


    /**
     * Get transformationRulesetGroupsTrunk
     *
     * @return \Ivoz\Domain\Model\TransformationRulesetGroupsTrunk\TransformationRulesetGroupsTrunkInterface
     */
    public function getTransformationRulesetGroupsTrunk();



}

