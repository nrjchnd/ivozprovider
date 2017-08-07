<?php
namespace Ivoz\Domain\Model\OutgoingDDIRulesPattern;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class OutgoingDDIRulesPatternDTO implements DataTransferObjectInterface
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var integer
     */
    private $priority = '1';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var mixed
     */
    private $outgoingDDIRuleIdId;

    /**
     * @var mixed
     */
    private $matchListIdId;

    /**
     * @var mixed
     */
    private $forcedDDIIdId;

    /**
     * @var mixed
     */
    private $outgoingDDIRuleId;

    /**
     * @var mixed
     */
    private $matchListId;

    /**
     * @var mixed
     */
    private $forcedDDIId;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'action' => $this->getAction(),
            'priority' => $this->getPriority(),
            'id' => $this->getId(),
            'outgoingDDIRuleIdId' => $this->getOutgoingDDIRuleIdId(),
            'matchListIdId' => $this->getMatchListIdId(),
            'forcedDDIIdId' => $this->getForcedDDIIdId()
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->outgoingDDIRuleId = $transformer->transform('Ivoz\\Domain\\Model\\OutgoingDDIRule\\OutgoingDDIRuleInterface', $this->getOutgoingDDIRuleIdId());
        $this->matchListId = $transformer->transform('Ivoz\\Domain\\Model\\MatchList\\MatchList', $this->getMatchListIdId());
        $this->forcedDDIId = $transformer->transform('Ivoz\\Domain\\Model\\DDI\\DDI', $this->getForcedDDIIdId());
    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param string $action
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param integer $priority
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param integer $id
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $outgoingDDIRuleIdId
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setOutgoingDDIRuleIdId($outgoingDDIRuleIdId)
    {
        $this->outgoingDDIRuleIdId = $outgoingDDIRuleIdId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getOutgoingDDIRuleIdId()
    {
        return $this->outgoingDDIRuleIdId;
    }

    /**
     * @return \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterface
     */
    public function getOutgoingDDIRuleId()
    {
        return $this->outgoingDDIRuleId;
    }

    /**
     * @param integer $matchListIdId
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setMatchListIdId($matchListIdId)
    {
        $this->matchListIdId = $matchListIdId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMatchListIdId()
    {
        return $this->matchListIdId;
    }

    /**
     * @return \Ivoz\Domain\Model\MatchList\MatchList
     */
    public function getMatchListId()
    {
        return $this->matchListId;
    }

    /**
     * @param integer $forcedDDIIdId
     *
     * @return OutgoingDDIRulesPatternDTO
     */
    public function setForcedDDIIdId($forcedDDIIdId)
    {
        $this->forcedDDIIdId = $forcedDDIIdId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getForcedDDIIdId()
    {
        return $this->forcedDDIIdId;
    }

    /**
     * @return \Ivoz\Domain\Model\DDI\DDI
     */
    public function getForcedDDIId()
    {
        return $this->forcedDDIId;
    }
}

