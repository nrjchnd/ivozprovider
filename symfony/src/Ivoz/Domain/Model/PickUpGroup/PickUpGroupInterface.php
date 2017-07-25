<?php

namespace Ivoz\Domain\Model\PickUpGroup;

use Core\Domain\Model\EntityInterface;

interface PickUpGroupInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return PickUpGroupInterface
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
     * @return PickUpGroupInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

