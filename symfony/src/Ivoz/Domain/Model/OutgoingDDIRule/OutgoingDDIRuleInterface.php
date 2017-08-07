<?php

namespace Ivoz\Domain\Model\OutgoingDDIRule;

use Core\Domain\Model\EntityInterface;

interface OutgoingDDIRuleInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return OutgoingDDIRuleInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set defaultAction
     *
     * @param string $defaultAction
     *
     * @return OutgoingDDIRuleInterface
     */
    public function setDefaultAction($defaultAction);


    /**
     * Get defaultAction
     *
     * @return string
     */
    public function getDefaultAction();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return OutgoingDDIRuleInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set forcedDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $forcedDDI
     *
     * @return OutgoingDDIRuleInterface
     */
    public function setForcedDDI(\Ivoz\Domain\Model\DDI\DDIInterface $forcedDDI = null);


    /**
     * Get forcedDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getForcedDDI();



}

