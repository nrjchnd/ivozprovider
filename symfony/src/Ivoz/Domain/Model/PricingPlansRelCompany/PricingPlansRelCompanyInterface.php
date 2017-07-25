<?php

namespace Ivoz\Domain\Model\PricingPlansRelCompany;

use Core\Domain\Model\EntityInterface;

interface PricingPlansRelCompanyInterface extends EntityInterface
{
    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setValidFrom($validFrom);


    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom();


    /**
     * Set validTo
     *
     * @param \DateTime $validTo
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setValidTo($validTo);


    /**
     * Get validTo
     *
     * @return \DateTime
     */
    public function getValidTo();


    /**
     * Set metric
     *
     * @param integer $metric
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setMetric($metric);


    /**
     * Get metric
     *
     * @return integer
     */
    public function getMetric();


    /**
     * Set pricingPlan
     *
     * @param \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setPricingPlan(\Ivoz\Domain\Model\PricingPlan\PricingPlanInterface $pricingPlan);


    /**
     * Get pricingPlan
     *
     * @return \Ivoz\Domain\Model\PricingPlan\PricingPlanInterface
     */
    public function getPricingPlan();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return PricingPlansRelCompanyInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}

