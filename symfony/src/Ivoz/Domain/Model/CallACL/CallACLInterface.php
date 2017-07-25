<?php

namespace Ivoz\Domain\Model\CallACL;

use Core\Domain\Model\EntityInterface;

interface CallACLInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return CallACLInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set defaultPolicy
     *
     * @param string $defaultPolicy
     *
     * @return CallACLInterface
     */
    public function setDefaultPolicy($defaultPolicy);


    /**
     * Get defaultPolicy
     *
     * @return string
     */
    public function getDefaultPolicy();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return CallACLInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

