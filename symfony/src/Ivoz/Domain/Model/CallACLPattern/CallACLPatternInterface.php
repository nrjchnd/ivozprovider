<?php

namespace Ivoz\Domain\Model\CallACLPattern;

use Core\Domain\Model\EntityInterface;

interface CallACLPatternInterface extends EntityInterface
{
    /**
     * Set name
     *
     * @param string $name
     *
     * @return CallACLPatternInterface
     */
    public function setName($name);


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Set regExp
     *
     * @param string $regExp
     *
     * @return CallACLPatternInterface
     */
    public function setRegExp($regExp);


    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return CallACLPatternInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

