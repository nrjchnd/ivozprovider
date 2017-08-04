<?php
namespace Ivoz\Domain\Model\Brand;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * BrandTrait
 */
trait BrandTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $companies;

    /**
     * @var ArrayCollection
     */
    protected $operators;

    /**
     * @var ArrayCollection
     */
    protected $services;

    /**
     * @var ArrayCollection
     */
    protected $urls;

    /**
     * @var ArrayCollection
     */
    protected $relFeatures;

    /**
     * @var ArrayCollection
     */
    protected $domains;

    /**
     * @var ArrayCollection
     */
    protected $retailAccounts;

    /**
     * @var ArrayCollection
     */
    protected $genericMusicsOnHold;

    /**
     * @var ArrayCollection
     */
    protected $genericCallACLPatterns;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(...func_get_args());
        $this->companies = new ArrayCollection();
        $this->operators = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->urls = new ArrayCollection();
        $this->relFeatures = new ArrayCollection();
        $this->domains = new ArrayCollection();
        $this->retailAccounts = new ArrayCollection();
        $this->genericMusicsOnHold = new ArrayCollection();
        $this->genericCallACLPatterns = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return BrandDTO
     */
    public static function createDTO()
    {
        return new BrandDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto BrandDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replaceCompanies($dto->getCompanies())
            ->replaceOperators($dto->getOperators())
            ->replaceServices($dto->getServices())
            ->replaceUrls($dto->getUrls())
            ->replaceRelFeatures($dto->getRelFeatures())
            ->replaceDomains($dto->getDomains())
            ->replaceRetailAccounts($dto->getRetailAccounts())
            ->replaceGenericMusicsOnHold($dto->getGenericMusicsOnHold())
            ->replaceGenericCallACLPatterns($dto->getGenericCallACLPatterns())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto BrandDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replaceCompanies($dto->getCompanies())
            ->replaceOperators($dto->getOperators())
            ->replaceServices($dto->getServices())
            ->replaceUrls($dto->getUrls())
            ->replaceRelFeatures($dto->getRelFeatures())
            ->replaceDomains($dto->getDomains())
            ->replaceRetailAccounts($dto->getRetailAccounts())
            ->replaceGenericMusicsOnHold($dto->getGenericMusicsOnHold())
            ->replaceGenericCallACLPatterns($dto->getGenericCallACLPatterns());


        return $this;
    }

    /**
     * @return BrandDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setCompanies($this->getCompanies())
            ->setOperators($this->getOperators())
            ->setServices($this->getServices())
            ->setUrls($this->getUrls())
            ->setRelFeatures($this->getRelFeatures())
            ->setDomains($this->getDomains())
            ->setRetailAccounts($this->getRetailAccounts())
            ->setGenericMusicsOnHold($this->getGenericMusicsOnHold())
            ->setGenericCallACLPatterns($this->getGenericCallACLPatterns());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return parent::__toArray() + [
            'id' => $this->getId()
        ];
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add company
     *
     * @param \Ivoz\Domain\Model\Company\Company $company
     *
     * @return BrandTrait
     */
    public function addCompany(\Ivoz\Domain\Model\Company\Company $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \Ivoz\Domain\Model\Company\Company $company
     */
    public function removeCompany(\Ivoz\Domain\Model\Company\Company $company)
    {
        $this->companies->removeElement($company);
    }

    /**
     * Replace companies
     *
     * @param \Ivoz\Domain\Model\Company\Company[] $companies
     * @return self
     */
    public function replaceCompanies(array $companies)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($companies as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->companies as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->companies[$key] = $updatedEntities[$identity];
            } else {
                $this->removeCompany($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addCompany($entity);
        }

        return $this;
    }

    /**
     * Get companies
     *
     * @return array
     */
    public function getCompanies(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->companies->matching($criteria)->toArray();
        }

        return $this->companies->toArray();
    }

    /**
     * Add operator
     *
     * @param \Ivoz\Domain\Model\BrandOperator\BrandOperator $operator
     *
     * @return BrandTrait
     */
    public function addOperator(\Ivoz\Domain\Model\BrandOperator\BrandOperator $operator)
    {
        $this->operators[] = $operator;

        return $this;
    }

    /**
     * Remove operator
     *
     * @param \Ivoz\Domain\Model\BrandOperator\BrandOperator $operator
     */
    public function removeOperator(\Ivoz\Domain\Model\BrandOperator\BrandOperator $operator)
    {
        $this->operators->removeElement($operator);
    }

    /**
     * Replace operators
     *
     * @param \Ivoz\Domain\Model\BrandOperator\BrandOperator[] $operators
     * @return self
     */
    public function replaceOperators(array $operators)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($operators as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->operators as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->operators[$key] = $updatedEntities[$identity];
            } else {
                $this->removeOperator($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addOperator($entity);
        }

        return $this;
    }

    /**
     * Get operators
     *
     * @return array
     */
    public function getOperators(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->operators->matching($criteria)->toArray();
        }

        return $this->operators->toArray();
    }

    /**
     * Add service
     *
     * @param \Ivoz\Domain\Model\BrandService\BrandService $service
     *
     * @return BrandTrait
     */
    public function addService(\Ivoz\Domain\Model\BrandService\BrandService $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \Ivoz\Domain\Model\BrandService\BrandService $service
     */
    public function removeService(\Ivoz\Domain\Model\BrandService\BrandService $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Replace services
     *
     * @param \Ivoz\Domain\Model\BrandService\BrandService[] $services
     * @return self
     */
    public function replaceServices(array $services)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($services as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->services as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->services[$key] = $updatedEntities[$identity];
            } else {
                $this->removeService($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addService($entity);
        }

        return $this;
    }

    /**
     * Get services
     *
     * @return array
     */
    public function getServices(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->services->matching($criteria)->toArray();
        }

        return $this->services->toArray();
    }

    /**
     * Add url
     *
     * @param \Ivoz\Domain\Model\BrandURL\BrandURL $url
     *
     * @return BrandTrait
     */
    public function addUrl(\Ivoz\Domain\Model\BrandURL\BrandURL $url)
    {
        $this->urls[] = $url;

        return $this;
    }

    /**
     * Remove url
     *
     * @param \Ivoz\Domain\Model\BrandURL\BrandURL $url
     */
    public function removeUrl(\Ivoz\Domain\Model\BrandURL\BrandURL $url)
    {
        $this->urls->removeElement($url);
    }

    /**
     * Replace urls
     *
     * @param \Ivoz\Domain\Model\BrandURL\BrandURL[] $urls
     * @return self
     */
    public function replaceUrls(array $urls)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($urls as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->urls as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->urls[$key] = $updatedEntities[$identity];
            } else {
                $this->removeUrl($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addUrl($entity);
        }

        return $this;
    }

    /**
     * Get urls
     *
     * @return array
     */
    public function getUrls(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->urls->matching($criteria)->toArray();
        }

        return $this->urls->toArray();
    }

    /**
     * Add relFeature
     *
     * @param \Ivoz\Domain\Model\FeaturesRelBrand\FeaturesRelBrand $relFeature
     *
     * @return BrandTrait
     */
    public function addRelFeature(\Ivoz\Domain\Model\FeaturesRelBrand\FeaturesRelBrand $relFeature)
    {
        $this->relFeatures[] = $relFeature;

        return $this;
    }

    /**
     * Remove relFeature
     *
     * @param \Ivoz\Domain\Model\FeaturesRelBrand\FeaturesRelBrand $relFeature
     */
    public function removeRelFeature(\Ivoz\Domain\Model\FeaturesRelBrand\FeaturesRelBrand $relFeature)
    {
        $this->relFeatures->removeElement($relFeature);
    }

    /**
     * Replace relFeatures
     *
     * @param \Ivoz\Domain\Model\FeaturesRelBrand\FeaturesRelBrand[] $relFeatures
     * @return self
     */
    public function replaceRelFeatures(array $relFeatures)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($relFeatures as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->relFeatures as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->relFeatures[$key] = $updatedEntities[$identity];
            } else {
                $this->removeRelFeature($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addRelFeature($entity);
        }

        return $this;
    }

    /**
     * Get relFeatures
     *
     * @return array
     */
    public function getRelFeatures(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->relFeatures->matching($criteria)->toArray();
        }

        return $this->relFeatures->toArray();
    }

    /**
     * Add domain
     *
     * @param \Ivoz\Domain\Model\Domain\Domain $domain
     *
     * @return BrandTrait
     */
    public function addDomain(\Ivoz\Domain\Model\Domain\Domain $domain)
    {
        $this->domains[] = $domain;

        return $this;
    }

    /**
     * Remove domain
     *
     * @param \Ivoz\Domain\Model\Domain\Domain $domain
     */
    public function removeDomain(\Ivoz\Domain\Model\Domain\Domain $domain)
    {
        $this->domains->removeElement($domain);
    }

    /**
     * Replace domains
     *
     * @param \Ivoz\Domain\Model\Domain\Domain[] $domains
     * @return self
     */
    public function replaceDomains(array $domains)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($domains as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->domains as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->domains[$key] = $updatedEntities[$identity];
            } else {
                $this->removeDomain($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addDomain($entity);
        }

        return $this;
    }

    /**
     * Get domains
     *
     * @return array
     */
    public function getDomains(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->domains->matching($criteria)->toArray();
        }

        return $this->domains->toArray();
    }

    /**
     * Add retailAccount
     *
     * @param \Ivoz\Domain\Model\RetailAccount\RetailAccount $retailAccount
     *
     * @return BrandTrait
     */
    public function addRetailAccount(\Ivoz\Domain\Model\RetailAccount\RetailAccount $retailAccount)
    {
        $this->retailAccounts[] = $retailAccount;

        return $this;
    }

    /**
     * Remove retailAccount
     *
     * @param \Ivoz\Domain\Model\RetailAccount\RetailAccount $retailAccount
     */
    public function removeRetailAccount(\Ivoz\Domain\Model\RetailAccount\RetailAccount $retailAccount)
    {
        $this->retailAccounts->removeElement($retailAccount);
    }

    /**
     * Replace retailAccounts
     *
     * @param \Ivoz\Domain\Model\RetailAccount\RetailAccount[] $retailAccounts
     * @return self
     */
    public function replaceRetailAccounts(array $retailAccounts)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($retailAccounts as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->retailAccounts as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->retailAccounts[$key] = $updatedEntities[$identity];
            } else {
                $this->removeRetailAccount($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addRetailAccount($entity);
        }

        return $this;
    }

    /**
     * Get retailAccounts
     *
     * @return array
     */
    public function getRetailAccounts(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->retailAccounts->matching($criteria)->toArray();
        }

        return $this->retailAccounts->toArray();
    }

    /**
     * Add genericMusicsOnHold
     *
     * @param \Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold $genericMusicsOnHold
     *
     * @return BrandTrait
     */
    public function addGenericMusicsOnHold(\Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold $genericMusicsOnHold)
    {
        $this->genericMusicsOnHold[] = $genericMusicsOnHold;

        return $this;
    }

    /**
     * Remove genericMusicsOnHold
     *
     * @param \Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold $genericMusicsOnHold
     */
    public function removeGenericMusicsOnHold(\Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold $genericMusicsOnHold)
    {
        $this->genericMusicsOnHold->removeElement($genericMusicsOnHold);
    }

    /**
     * Replace genericMusicsOnHold
     *
     * @param \Ivoz\Domain\Model\GenericMusicOnHold\GenericMusicOnHold[] $genericMusicsOnHold
     * @return self
     */
    public function replaceGenericMusicsOnHold(array $genericMusicsOnHold)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($genericMusicsOnHold as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->genericMusicsOnHold as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->genericMusicsOnHold[$key] = $updatedEntities[$identity];
            } else {
                $this->removeGenericMusicsOnHold($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addGenericMusicsOnHold($entity);
        }

        return $this;
    }

    /**
     * Get genericMusicsOnHold
     *
     * @return array
     */
    public function getGenericMusicsOnHold(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->genericMusicsOnHold->matching($criteria)->toArray();
        }

        return $this->genericMusicsOnHold->toArray();
    }

    /**
     * Add genericCallACLPattern
     *
     * @param \Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern $genericCallACLPattern
     *
     * @return BrandTrait
     */
    public function addGenericCallACLPattern(\Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern $genericCallACLPattern)
    {
        $this->genericCallACLPatterns[] = $genericCallACLPattern;

        return $this;
    }

    /**
     * Remove genericCallACLPattern
     *
     * @param \Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern $genericCallACLPattern
     */
    public function removeGenericCallACLPattern(\Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern $genericCallACLPattern)
    {
        $this->genericCallACLPatterns->removeElement($genericCallACLPattern);
    }

    /**
     * Replace genericCallACLPatterns
     *
     * @param \Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern[] $genericCallACLPatterns
     * @return self
     */
    public function replaceGenericCallACLPatterns(array $genericCallACLPatterns)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($genericCallACLPatterns as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setBrand($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->genericCallACLPatterns as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->genericCallACLPatterns[$key] = $updatedEntities[$identity];
            } else {
                $this->removeGenericCallACLPattern($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addGenericCallACLPattern($entity);
        }

        return $this;
    }

    /**
     * Get genericCallACLPatterns
     *
     * @return array
     */
    public function getGenericCallACLPatterns(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->genericCallACLPatterns->matching($criteria)->toArray();
        }

        return $this->genericCallACLPatterns->toArray();
    }


}

