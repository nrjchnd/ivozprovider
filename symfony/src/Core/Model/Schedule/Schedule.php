<?php

namespace Core\Model\Schedule;

use Assert\Assertion;
use Core\Application\DTO\ScheduleDTO;
use Core\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * Schedule
 */
class Schedule implements EntityInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTime
     */
    protected $timeIn;

    /**
     * @var \DateTime
     */
    protected $timeout;

    /**
     * @var boolean
     */
    protected $monday = '0';

    /**
     * @var boolean
     */
    protected $tuesday = '0';

    /**
     * @var boolean
     */
    protected $wednesday = '0';

    /**
     * @var boolean
     */
    protected $thursday = '0';

    /**
     * @var boolean
     */
    protected $friday = '0';

    /**
     * @var boolean
     */
    protected $saturday = '0';

    /**
     * @var boolean
     */
    protected $sunday = '0';

    /**
     * @var \Core\Model\Company\Company
     */
    protected $company;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($name, $timeIn, $timeout)
    {
        $this->setName($name);
        $this->setTimeIn($timeIn);
        $this->setTimeout($timeout);
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return ScheduleDTO
     */
    public static function createDTO()
    {
        return new ScheduleDTO();
    }

    /**
     * Factory method
     * @param ScheduleDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, ScheduleDTO::class);

        $self = new self(
            $dto->getName(),
            $dto->getTimeIn(),
            $dto->getTimeout()
        );

        return $self
            ->setMonday($dto->getMonday())
            ->setTuesday($dto->getTuesday())
            ->setWednesday($dto->getWednesday())
            ->setThursday($dto->getThursday())
            ->setFriday($dto->getFriday())
            ->setSaturday($dto->getSaturday())
            ->setSunday($dto->getSunday())
            ->setCompany($dto->getCompany());
    }

    /**
     * @param ScheduleDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, ScheduleDTO::class);

        $this
            ->setName($dto->getName())
            ->setTimeIn($dto->getTimeIn())
            ->setTimeout($dto->getTimeout())
            ->setMonday($dto->getMonday())
            ->setTuesday($dto->getTuesday())
            ->setWednesday($dto->getWednesday())
            ->setThursday($dto->getThursday())
            ->setFriday($dto->getFriday())
            ->setSaturday($dto->getSaturday())
            ->setSunday($dto->getSunday())
            ->setCompany($dto->getCompany());


        return $this;
    }

    /**
     * @return ScheduleDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setName($this->getName())
            ->setTimeIn($this->getTimeIn())
            ->setTimeout($this->getTimeout())
            ->setMonday($this->getMonday())
            ->setTuesday($this->getTuesday())
            ->setWednesday($this->getWednesday())
            ->setThursday($this->getThursday())
            ->setFriday($this->getFriday())
            ->setSaturday($this->getSaturday())
            ->setSunday($this->getSunday())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'timeIn' => $this->getTimeIn(),
            'timeout' => $this->getTimeout(),
            'monday' => $this->getMonday(),
            'tuesday' => $this->getTuesday(),
            'wednesday' => $this->getWednesday(),
            'thursday' => $this->getThursday(),
            'friday' => $this->getFriday(),
            'saturday' => $this->getSaturday(),
            'sunday' => $this->getSunday(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null
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
     * Set name
     *
     * @param string $name
     *
     * @return Schedule
     */
    protected function setName($name)
    {
        Assertion::notNull($name);
        Assertion::maxLength($name, 50);

        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set timeIn
     *
     * @param \DateTime $timeIn
     *
     * @return Schedule
     */
    protected function setTimeIn($timeIn)
    {
        Assertion::notNull($timeIn);

        $this->timeIn = $timeIn;

        return $this;
    }

    /**
     * Get timeIn
     *
     * @return \DateTime
     */
    public function getTimeIn()
    {
        return $this->timeIn;
    }

    /**
     * Set timeout
     *
     * @param \DateTime $timeout
     *
     * @return Schedule
     */
    protected function setTimeout($timeout)
    {
        Assertion::notNull($timeout);

        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get timeout
     *
     * @return \DateTime
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set monday
     *
     * @param boolean $monday
     *
     * @return Schedule
     */
    protected function setMonday($monday = null)
    {
        if (!is_null($monday)) {
            Assertion::between(intval($monday), 0, 1);
        }

        $this->monday = $monday;

        return $this;
    }

    /**
     * Get monday
     *
     * @return boolean
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Set tuesday
     *
     * @param boolean $tuesday
     *
     * @return Schedule
     */
    protected function setTuesday($tuesday = null)
    {
        if (!is_null($tuesday)) {
            Assertion::between(intval($tuesday), 0, 1);
        }

        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get tuesday
     *
     * @return boolean
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set wednesday
     *
     * @param boolean $wednesday
     *
     * @return Schedule
     */
    protected function setWednesday($wednesday = null)
    {
        if (!is_null($wednesday)) {
            Assertion::between(intval($wednesday), 0, 1);
        }

        $this->wednesday = $wednesday;

        return $this;
    }

    /**
     * Get wednesday
     *
     * @return boolean
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Set thursday
     *
     * @param boolean $thursday
     *
     * @return Schedule
     */
    protected function setThursday($thursday = null)
    {
        if (!is_null($thursday)) {
            Assertion::between(intval($thursday), 0, 1);
        }

        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get thursday
     *
     * @return boolean
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set friday
     *
     * @param boolean $friday
     *
     * @return Schedule
     */
    protected function setFriday($friday = null)
    {
        if (!is_null($friday)) {
            Assertion::between(intval($friday), 0, 1);
        }

        $this->friday = $friday;

        return $this;
    }

    /**
     * Get friday
     *
     * @return boolean
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Set saturday
     *
     * @param boolean $saturday
     *
     * @return Schedule
     */
    protected function setSaturday($saturday = null)
    {
        if (!is_null($saturday)) {
            Assertion::between(intval($saturday), 0, 1);
        }

        $this->saturday = $saturday;

        return $this;
    }

    /**
     * Get saturday
     *
     * @return boolean
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * Set sunday
     *
     * @param boolean $sunday
     *
     * @return Schedule
     */
    protected function setSunday($sunday = null)
    {
        if (!is_null($sunday)) {
            Assertion::between(intval($sunday), 0, 1);
        }

        $this->sunday = $sunday;

        return $this;
    }

    /**
     * Get sunday
     *
     * @return boolean
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * Set company
     *
     * @param \Core\Model\Company\Company $company
     *
     * @return Schedule
     */
    protected function setCompany(\Core\Model\Company\Company $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Core\Model\Company\Company
     */
    public function getCompany()
    {
        return $this->company;
    }



    // @codeCoverageIgnoreEnd
}

