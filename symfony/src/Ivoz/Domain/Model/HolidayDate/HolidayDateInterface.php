<?php

namespace Ivoz\Domain\Model\HolidayDate;

use Core\Domain\Model\EntityInterface;

interface HolidayDateInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return HolidayDateInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return HolidayDateInterface
     */
    public function setEventDate($eventDate);


    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate();


    /**
     * Set calendar
     *
     * @param \Ivoz\Domain\Model\Calendar\CalendarInterface $calendar
     *
     * @return HolidayDateInterface
     */
    public function setCalendar(\Ivoz\Domain\Model\Calendar\CalendarInterface $calendar = null);


    /**
     * Get calendar
     *
     * @return \Ivoz\Domain\Model\Calendar\CalendarInterface
     */
    public function getCalendar();


    /**
     * Set locution
     *
     * @param \Ivoz\Domain\Model\Locution\LocutionInterface $locution
     *
     * @return HolidayDateInterface
     */
    public function setLocution(\Ivoz\Domain\Model\Locution\LocutionInterface $locution = null);


    /**
     * Get locution
     *
     * @return \Ivoz\Domain\Model\Locution\LocutionInterface
     */
    public function getLocution();



}

