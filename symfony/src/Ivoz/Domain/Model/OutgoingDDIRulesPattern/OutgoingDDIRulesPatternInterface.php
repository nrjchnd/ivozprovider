<?php

namespace Ivoz\Domain\Model\OutgoingDDIRulesPattern;

use Core\Domain\Model\EntityInterface;

interface OutgoingDDIRulesPatternInterface extends EntityInterface
{
    /**
     * Set action
     *
     * @param string $action
     *
     * @return OutgoingDDIRulesPatternInterface
     */
    public function setAction($action);


    /**
     * Get action
     *
     * @return string
     */
    public function getAction();


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return OutgoingDDIRulesPatternInterface
     */
    public function setPriority($priority);


    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority();


    /**
     * Set outgoingDDIRuleId
     *
     * @param \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface $outgoingDDIRuleId
     *
     * @return OutgoingDDIRulesPatternInterface
     */
    public function setOutgoingDDIRuleId(\Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface $outgoingDDIRuleId = null);


    /**
     * Get outgoingDDIRuleId
     *
     * @return \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface
     */
    public function getOutgoingDDIRuleId();


    /**
     * Set matchListId
     *
     * @param \Ivoz\Domain\Model\MatchList\MatchListInterface $matchListId
     *
     * @return OutgoingDDIRulesPatternInterface
     */
    public function setMatchListId(\Ivoz\Domain\Model\MatchList\MatchListInterface $matchListId = null);


    /**
     * Get matchListId
     *
     * @return \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchListId();


    /**
     * Set forcedDDIId
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $forcedDDIId
     *
     * @return OutgoingDDIRulesPatternInterface
     */
    public function setForcedDDIId(\Ivoz\Domain\Model\DDI\DDIInterface $forcedDDIId = null);


    /**
     * Get forcedDDIId
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getForcedDDIId();



}

