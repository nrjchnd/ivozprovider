<?php

namespace Core\Domain\Model\CompanyService;



interface CompanyServiceInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get code
     *
     * @return string
     */
    public function getCode();


    /**
     * Get company
     *
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Get service
     *
     * @return \Core\Domain\Model\Service\ServiceInterface
     */
    public function getService();



}
