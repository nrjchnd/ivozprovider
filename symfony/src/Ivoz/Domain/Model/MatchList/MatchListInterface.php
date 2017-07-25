<?php

namespace Ivoz\Domain\Model\MatchList;

use Core\Domain\Model\EntityInterface;

interface MatchListInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return MatchListInterface
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
     * @return MatchListInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

