<?php

namespace Core\Domain\Model\PickUpGroup;



interface PickUpGroupInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


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
