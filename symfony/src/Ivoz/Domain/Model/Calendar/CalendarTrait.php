<?php
namespace Ivoz\Domain\Model\Calendar;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * CalendarTrait
 */
trait CalendarTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $holidayDates;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(...func_get_args());
        $this->holidayDates = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->initChangelog();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return CalendarDTO
     */
    public static function createDTO()
    {
        return new CalendarDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CalendarDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replaceHolidayDates($dto->getHolidayDates())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CalendarDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replaceHolidayDates($dto->getHolidayDates());


        return $this;
    }

    /**
     * @return CalendarDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setHolidayDates($this->getHolidayDates());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return parent::__toArray() + [
            'id' => $this->getId()
        ];
    }


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
     * Add holidayDate
     *
     * @param \Ivoz\Domain\Model\HolidayDate\HolidayDate $holidayDate
     *
     * @return CalendarTrait
     */
    public function addHolidayDate(\Ivoz\Domain\Model\HolidayDate\HolidayDate $holidayDate)
    {
        $this->holidayDates[] = $holidayDate;

        return $this;
    }

    /**
     * Remove holidayDate
     *
     * @param \Ivoz\Domain\Model\HolidayDate\HolidayDate $holidayDate
     */
    public function removeHolidayDate(\Ivoz\Domain\Model\HolidayDate\HolidayDate $holidayDate)
    {
        $this->holidayDates->removeElement($holidayDate);
    }

    /**
     * Replace holidayDates
     *
     * @param \Ivoz\Domain\Model\HolidayDate\HolidayDate[] $holidayDates
     * @return self
     */
    public function replaceHolidayDates(array $holidayDates)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($holidayDates as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCalendar($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->holidayDates as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->holidayDates[$key] = $updatedEntities[$identity];
            } else {
                $this->removeHolidayDate($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addHolidayDate($entity);
        }

        return $this;
    }

    /**
     * Get holidayDates
     *
     * @return array
     */
    public function getHolidayDates(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->holidayDates->matching($criteria)->toArray();
        }

        return $this->holidayDates->toArray();
    }


}

