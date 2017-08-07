<?php

namespace Ivoz\Domain\Model\ExternalCallFilterRelSchedule;

use Core\Domain\Model\EntityInterface;

interface ExternalCallFilterRelScheduleInterface extends EntityInterface
{
    /**
     * Set filter
     *
     * @param \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter
     *
     * @return ExternalCallFilterRelScheduleInterface
     */
    public function setFilter(\Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface $filter = null);


    /**
     * Get filter
     *
     * @return \Ivoz\Domain\Model\ExternalCallFilter\ExternalCallFilterInterface
     */
    public function getFilter();


    /**
     * Set schedule
     *
     * @param \Ivoz\Domain\Model\Schedule\ScheduleInterface $schedule
     *
     * @return ExternalCallFilterRelScheduleInterface
     */
    public function setSchedule(\Ivoz\Domain\Model\Schedule\ScheduleInterface $schedule);


    /**
     * Get schedule
     *
     * @return \Ivoz\Domain\Model\Schedule\ScheduleInterface
     */
    public function getSchedule();



}

