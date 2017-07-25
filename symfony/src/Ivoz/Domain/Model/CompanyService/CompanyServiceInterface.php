<?php

namespace Ivoz\Domain\Model\CompanyService;

use Core\Domain\Model\EntityInterface;

interface CompanyServiceInterface extends EntityInterface
{
    /**
     * Set code
     *
     * @param string $code
     *
     * @return CompanyServiceInterface
     */
    public function setCode($code);


    /**
     * Get code
     *
     * @return string
     */
    public function getCode();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return CompanyServiceInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set service
     *
     * @param \Ivoz\Domain\Model\Service\ServiceInterface $service
     *
     * @return CompanyServiceInterface
     */
    public function setService(\Ivoz\Domain\Model\Service\ServiceInterface $service);


    /**
     * Get service
     *
     * @return \Ivoz\Domain\Model\Service\ServiceInterface
     */
    public function getService();



}

