<?php

namespace Core\Domain\Model\Calendar;



interface CalendarInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get company
     *
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

