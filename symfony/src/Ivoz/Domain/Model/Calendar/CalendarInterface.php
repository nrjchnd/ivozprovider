<?php

namespace Ivoz\Domain\Model\Calendar;

use Core\Domain\Model\EntityInterface;

interface CalendarInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return CalendarInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return CalendarInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

