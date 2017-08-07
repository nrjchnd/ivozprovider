<?php

namespace Ivoz\Domain\Model\ExternalCallFilterRelCalendar;

use Core\Domain\Model\EntityInterface;

interface ExternalCallFilterRelCalendarInterface extends EntityInterface
{
    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return ExternalCallFilterRelCalendarInterface
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter = null);


    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter();


    /**
     * Set calendar
     *
     * @param \Ivoz\Domain\Model\Calendar\CalendarInterface $calendar
     *
     * @return ExternalCallFilterRelCalendarInterface
     */
    public function setCalendar(\Ivoz\Domain\Model\Calendar\CalendarInterface $calendar);


    /**
     * Get calendar
     *
     * @return \Ivoz\Domain\Model\Calendar\CalendarInterface
     */
    public function getCalendar();



}

