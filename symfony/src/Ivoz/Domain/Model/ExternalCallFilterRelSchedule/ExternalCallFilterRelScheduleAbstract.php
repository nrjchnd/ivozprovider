<?php
namespace Ivoz\Domain\Model\ExternalCallFilterRelSchedule;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * ExternalCallFilterRelScheduleAbstract
 */
abstract class ExternalCallFilterRelScheduleAbstract
{
    /**
     * @var \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    protected $filter;

    /**
     * @var \Ivoz\Domain\Model\Schedule\ScheduleInterface
     */
    protected $schedule;


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

        $this->initChangelog();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    /**
     * @param string $fieldName
     * @return mixed
     * @throws \Exception
     */
    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    public function getInitialValue($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }

        return $this->_initialValues[$fieldName];
    }

    /**
     * @return ExternalCallFilterRelScheduleDTO
     */
    public static function createDTO()
    {
        return new ExternalCallFilterRelScheduleDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterRelScheduleDTO
         */
        Assertion::isInstanceOf($dto, ExternalCallFilterRelScheduleDTO::class);

        $self = new static();

        return $self
            ->setFilter($dto->getFilter())
            ->setSchedule($dto->getSchedule())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterRelScheduleDTO
         */
        Assertion::isInstanceOf($dto, ExternalCallFilterRelScheduleDTO::class);

        $this
            ->setFilter($dto->getFilter())
            ->setSchedule($dto->getSchedule());


        return $this;
    }

    /**
     * @return ExternalCallFilterRelScheduleDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setFilterId($this->getFilter() ? $this->getFilter()->getId() : null)
            ->setScheduleId($this->getSchedule() ? $this->getSchedule()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'filterId' => $this->getFilter() ? $this->getFilter()->getId() : null,
            'scheduleId' => $this->getSchedule() ? $this->getSchedule()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return self
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set schedule
     *
     * @param \Ivoz\Domain\Model\Schedule\ScheduleInterface $schedule
     *
     * @return self
     */
    public function setSchedule(\Ivoz\Domain\Model\Schedule\ScheduleInterface $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return \Ivoz\Domain\Model\Schedule\ScheduleInterface
     */
    public function getSchedule()
    {
        return $this->schedule;
    }



    // @codeCoverageIgnoreEnd
}

