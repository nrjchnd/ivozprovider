<?php
namespace Ivoz\Domain\Model\DDI;

/**
 * DDI
 */
class DDI extends DDIAbstract implements DDIInterface
{
    use DDITrait;

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

