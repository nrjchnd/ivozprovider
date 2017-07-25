<?php

namespace Ivoz\Domain\Model\FeaturesRelCompany;

use Core\Domain\Model\EntityInterface;

interface FeaturesRelCompanyInterface extends EntityInterface
{
    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return FeaturesRelCompanyInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set feature
     *
     * @param \Ivoz\Domain\Model\Feature\FeatureInterface $feature
     *
     * @return FeaturesRelCompanyInterface
     */
    public function setFeature(\Ivoz\Domain\Model\Feature\FeatureInterface $feature = null);


    /**
     * Get feature
     *
     * @return \Ivoz\Domain\Model\Feature\FeatureInterface
     */
    public function getFeature();



}

