<?php
namespace Ivoz\Domain\Model\OutgoingDDIRulesPattern;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * OutgoingDDIRulesPatternAbstract
 */
abstract class OutgoingDDIRulesPatternAbstract
{
    /**
     * @comment enum:keep|force
     * @var string
     */
    protected $action;

    /**
     * @var integer
     */
    protected $priority = '1';

    /**
     * @var \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface
     */
    protected $outgoingDDIRuleId;

    /**
     * @var \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    protected $matchListId;

    /**
     * @var \Ivoz\Domain\Model\DDI\DDIInterface
     */
    protected $forcedDDIId;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($action, $priority)
    {
        $this->setAction($action);
        $this->setPriority($priority);
        $this->initChangelog();
    }

    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    /**
     * @return OutgoingDDIRulesPatternDTO
     */
    public static function createDTO()
    {
        return new OutgoingDDIRulesPatternDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto OutgoingDDIRulesPatternDTO
         */
        Assertion::isInstanceOf($dto, OutgoingDDIRulesPatternDTO::class);

        $self = new static(
            $dto->getAction(),
            $dto->getPriority());

        return $self
            ->setOutgoingDDIRuleId($dto->getOutgoingDDIRuleId())
            ->setMatchListId($dto->getMatchListId())
            ->setForcedDDIId($dto->getForcedDDIId())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto OutgoingDDIRulesPatternDTO
         */
        Assertion::isInstanceOf($dto, OutgoingDDIRulesPatternDTO::class);

        $this
            ->setAction($dto->getAction())
            ->setPriority($dto->getPriority())
            ->setOutgoingDDIRuleId($dto->getOutgoingDDIRuleId())
            ->setMatchListId($dto->getMatchListId())
            ->setForcedDDIId($dto->getForcedDDIId());


        return $this;
    }

    /**
     * @return OutgoingDDIRulesPatternDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setAction($this->getAction())
            ->setPriority($this->getPriority())
            ->setOutgoingDDIRuleIdId($this->getOutgoingDDIRuleId() ? $this->getOutgoingDDIRuleId()->getId() : null)
            ->setMatchListIdId($this->getMatchListId() ? $this->getMatchListId()->getId() : null)
            ->setForcedDDIIdId($this->getForcedDDIId() ? $this->getForcedDDIId()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'action' => $this->getAction(),
            'priority' => $this->getPriority(),
            'outgoingDDIRuleIdId' => $this->getOutgoingDDIRuleId() ? $this->getOutgoingDDIRuleId()->getId() : null,
            'matchListIdId' => $this->getMatchListId() ? $this->getMatchListId()->getId() : null,
            'forcedDDIIdId' => $this->getForcedDDIId() ? $this->getForcedDDIId()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set action
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction($action)
    {
        Assertion::notNull($action);
        Assertion::maxLength($action, 10);
        Assertion::choice($action, array (
          0 => 'keep',
          1 => 'force',
        ));

        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        Assertion::notNull($priority);
        Assertion::integerish($priority);

        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set outgoingDDIRuleId
     *
     * @param \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface $outgoingDDIRuleId
     *
     * @return self
     */
    public function setOutgoingDDIRuleId(\Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface $outgoingDDIRuleId = null)
    {
        $this->outgoingDDIRuleId = $outgoingDDIRuleId;

        return $this;
    }

    /**
     * Get outgoingDDIRuleId
     *
     * @return \Ivoz\Domain\Model\OutgoingDDIRule\OutgoingDDIRuleInterfaceInterface
     */
    public function getOutgoingDDIRuleId()
    {
        return $this->outgoingDDIRuleId;
    }

    /**
     * Set matchListId
     *
     * @param \Ivoz\Domain\Model\MatchList\MatchListInterface $matchListId
     *
     * @return self
     */
    public function setMatchListId(\Ivoz\Domain\Model\MatchList\MatchListInterface $matchListId = null)
    {
        $this->matchListId = $matchListId;

        return $this;
    }

    /**
     * Get matchListId
     *
     * @return \Ivoz\Domain\Model\MatchList\MatchListInterface
     */
    public function getMatchListId()
    {
        return $this->matchListId;
    }

    /**
     * Set forcedDDIId
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $forcedDDIId
     *
     * @return self
     */
    public function setForcedDDIId(\Ivoz\Domain\Model\DDI\DDIInterface $forcedDDIId = null)
    {
        $this->forcedDDIId = $forcedDDIId;

        return $this;
    }

    /**
     * Get forcedDDIId
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getForcedDDIId()
    {
        return $this->forcedDDIId;
    }



    // @codeCoverageIgnoreEnd
}

