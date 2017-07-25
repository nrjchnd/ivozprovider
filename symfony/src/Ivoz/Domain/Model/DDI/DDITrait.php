<?php

namespace Ivoz\Domain\Model\DDI;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Company\CompanyInterface;
use Ivoz\Domain\Model\Language\Language;

/**
 * DDI
 */
trait DDITrait
{

    /**
     * @return string Domain
     */
    public function getDomain()
    {
        /**
         * @var CompanyInterface $company
         */
        $company = $this->getCompany();
        if(!$company) {

            return null;
        }

        /**
         * @var Brand $brand
         */
        $brand = $company->getBrand();
        if(!$brand) {

            return null;
        }

        /**
         * @todo this does not exist
         */
        return $brand->getDomain();
    }

    public function getLanguageCode()
    {
        /**
         * @var Language $language
         */
        $language = $this->getLanguage();
        if (!$language) {

            /**
             * @var Company $company
             */
            $company = $this->getCompany();

            return $company->getLanguageCode();
        }

        return $language->getIden();
    }
}

