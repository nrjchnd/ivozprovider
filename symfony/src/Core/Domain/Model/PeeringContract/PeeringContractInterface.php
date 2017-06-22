<?php

namespace Core\Domain\Model\PeeringContract;



interface PeeringContractInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get externallyRated
     *
     * @return boolean
     */
    public function getExternallyRated();


    /**
     * Get brand
     *
     * @return \Core\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Get transformationRulesetGroupsTrunk
     *
     * @return \Core\Domain\Model\TransformationRulesetGroupsTrunk\TransformationRulesetGroupsTrunkInterface
     */
    public function getTransformationRulesetGroupsTrunk();



}
