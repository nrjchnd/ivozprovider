<?php

namespace Core\Domain\Model\RoutingPatternGroupsRelPattern;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * RoutingPatternGroupsRelPatternAbstract
 */
abstract class RoutingPatternGroupsRelPatternAbstract implements EntityInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Core\Domain\Model\RoutingPattern\RoutingPatternInterface
     */
    protected $routingPattern;

    /**
     * @var \Core\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface
     */
    protected $routingPatternGroup;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct()
    {

    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return RoutingPatternGroupsRelPatternDTO
     */
    public static function createDTO()
    {
        return new RoutingPatternGroupsRelPatternDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto RoutingPatternGroupsRelPatternDTO
         */
        Assertion::isInstanceOf($dto, RoutingPatternGroupsRelPatternDTO::class);

        $self = new static();

        return $self
            ->setRoutingPattern($dto->getRoutingPattern())
            ->setRoutingPatternGroup($dto->getRoutingPatternGroup());
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto RoutingPatternGroupsRelPatternDTO
         */
        Assertion::isInstanceOf($dto, RoutingPatternGroupsRelPatternDTO::class);

        $this
            ->setRoutingPattern($dto->getRoutingPattern())
            ->setRoutingPatternGroup($dto->getRoutingPatternGroup());


        return $this;
    }

    /**
     * @return RoutingPatternGroupsRelPatternDTO
     */
    public function toDTO()
    {
        return static::createDTO()
            ->setId($this->getId())
            ->setRoutingPatternId($this->getRoutingPattern() ? $this->getRoutingPattern()->getId() : null)
            ->setRoutingPatternGroupId($this->getRoutingPatternGroup() ? $this->getRoutingPatternGroup()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'routingPatternId' => $this->getRoutingPattern() ? $this->getRoutingPattern()->getId() : null,
            'routingPatternGroupId' => $this->getRoutingPatternGroup() ? $this->getRoutingPatternGroup()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set routingPattern
     *
     * @param \Core\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern
     *
     * @return self
     */
    protected function setRoutingPattern(\Core\Domain\Model\RoutingPattern\RoutingPatternInterface $routingPattern)
    {
        $this->routingPattern = $routingPattern;

        return $this;
    }

    /**
     * Get routingPattern
     *
     * @return \Core\Domain\Model\RoutingPattern\RoutingPatternInterface
     */
    public function getRoutingPattern()
    {
        return $this->routingPattern;
    }

    /**
     * Set routingPatternGroup
     *
     * @param \Core\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface $routingPatternGroup
     *
     * @return self
     */
    public function setRoutingPatternGroup(\Core\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface $routingPatternGroup = null)
    {
        $this->routingPatternGroup = $routingPatternGroup;

        return $this;
    }

    /**
     * Get routingPatternGroup
     *
     * @return \Core\Domain\Model\RoutingPatternGroup\RoutingPatternGroupInterface
     */
    public function getRoutingPatternGroup()
    {
        return $this->routingPatternGroup;
    }



    // @codeCoverageIgnoreEnd
}

