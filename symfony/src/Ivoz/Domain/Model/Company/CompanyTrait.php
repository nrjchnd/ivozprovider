<?php
namespace Ivoz\Domain\Model\Company;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * CompanyTrait
 */
trait CompanyTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $extensions;

    /**
     * @var ArrayCollection
     */
    protected $ddis;

    /**
     * @var ArrayCollection
     */
    protected $friends;

    /**
     * @var ArrayCollection
     */
    protected $companyServices;

    /**
     * @var ArrayCollection
     */
    protected $terminals;

    /**
     * @var ArrayCollection
     */
    protected $relPricingPlans;

    /**
     * @var ArrayCollection
     */
    protected $musicsOnHold;

    /**
     * @var ArrayCollection
     */
    protected $recordings;

    /**
     * @var ArrayCollection
     */
    protected $relFeatures;

    /**
     * @var ArrayCollection
     */
    protected $callACLPatterns;

    /**
     * @var ArrayCollection
     */
    protected $domains;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(...func_get_args());
        $this->extensions = new ArrayCollection();
        $this->ddis = new ArrayCollection();
        $this->friends = new ArrayCollection();
        $this->companyServices = new ArrayCollection();
        $this->terminals = new ArrayCollection();
        $this->relPricingPlans = new ArrayCollection();
        $this->musicsOnHold = new ArrayCollection();
        $this->recordings = new ArrayCollection();
        $this->relFeatures = new ArrayCollection();
        $this->callACLPatterns = new ArrayCollection();
        $this->domains = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->initChangelog();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return CompanyDTO
     */
    public static function createDTO()
    {
        return new CompanyDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CompanyDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replaceExtensions($dto->getExtensions())
            ->replaceDdis($dto->getDdis())
            ->replaceFriends($dto->getFriends())
            ->replaceCompanyServices($dto->getCompanyServices())
            ->replaceTerminals($dto->getTerminals())
            ->replaceRelPricingPlans($dto->getRelPricingPlans())
            ->replaceMusicsOnHold($dto->getMusicsOnHold())
            ->replaceRecordings($dto->getRecordings())
            ->replaceRelFeatures($dto->getRelFeatures())
            ->replaceCallACLPatterns($dto->getCallACLPatterns())
            ->replaceDomains($dto->getDomains())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CompanyDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replaceExtensions($dto->getExtensions())
            ->replaceDdis($dto->getDdis())
            ->replaceFriends($dto->getFriends())
            ->replaceCompanyServices($dto->getCompanyServices())
            ->replaceTerminals($dto->getTerminals())
            ->replaceRelPricingPlans($dto->getRelPricingPlans())
            ->replaceMusicsOnHold($dto->getMusicsOnHold())
            ->replaceRecordings($dto->getRecordings())
            ->replaceRelFeatures($dto->getRelFeatures())
            ->replaceCallACLPatterns($dto->getCallACLPatterns())
            ->replaceDomains($dto->getDomains());


        return $this;
    }

    /**
     * @return CompanyDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setExtensions($this->getExtensions())
            ->setDdis($this->getDdis())
            ->setFriends($this->getFriends())
            ->setCompanyServices($this->getCompanyServices())
            ->setTerminals($this->getTerminals())
            ->setRelPricingPlans($this->getRelPricingPlans())
            ->setMusicsOnHold($this->getMusicsOnHold())
            ->setRecordings($this->getRecordings())
            ->setRelFeatures($this->getRelFeatures())
            ->setCallACLPatterns($this->getCallACLPatterns())
            ->setDomains($this->getDomains());
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
     * Add extension
     *
     * @param \Ivoz\Domain\Model\Extension\Extension $extension
     *
     * @return CompanyTrait
     */
    public function addExtension(\Ivoz\Domain\Model\Extension\Extension $extension)
    {
        $this->extensions[] = $extension;

        return $this;
    }

    /**
     * Remove extension
     *
     * @param \Ivoz\Domain\Model\Extension\Extension $extension
     */
    public function removeExtension(\Ivoz\Domain\Model\Extension\Extension $extension)
    {
        $this->extensions->removeElement($extension);
    }

    /**
     * Replace extensions
     *
     * @param \Ivoz\Domain\Model\Extension\Extension[] $extensions
     * @return self
     */
    public function replaceExtensions(array $extensions)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($extensions as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->extensions as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->extensions[$key] = $updatedEntities[$identity];
            } else {
                $this->removeExtension($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addExtension($entity);
        }

        return $this;
    }

    /**
     * Get extensions
     *
     * @return array
     */
    public function getExtensions(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->extensions->matching($criteria)->toArray();
        }

        return $this->extensions->toArray();
    }

    /**
     * Add ddi
     *
     * @param \Ivoz\Domain\Model\DDI\DDI $ddi
     *
     * @return CompanyTrait
     */
    public function addDdi(\Ivoz\Domain\Model\DDI\DDI $ddi)
    {
        $this->ddis[] = $ddi;

        return $this;
    }

    /**
     * Remove ddi
     *
     * @param \Ivoz\Domain\Model\DDI\DDI $ddi
     */
    public function removeDdi(\Ivoz\Domain\Model\DDI\DDI $ddi)
    {
        $this->ddis->removeElement($ddi);
    }

    /**
     * Replace ddis
     *
     * @param \Ivoz\Domain\Model\DDI\DDI[] $ddis
     * @return self
     */
    public function replaceDdis(array $ddis)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($ddis as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->ddis as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->ddis[$key] = $updatedEntities[$identity];
            } else {
                $this->removeDdi($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addDdi($entity);
        }

        return $this;
    }

    /**
     * Get ddis
     *
     * @return array
     */
    public function getDdis(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->ddis->matching($criteria)->toArray();
        }

        return $this->ddis->toArray();
    }

    /**
     * Add friend
     *
     * @param \Ivoz\Domain\Model\Friend\Friend $friend
     *
     * @return CompanyTrait
     */
    public function addFriend(\Ivoz\Domain\Model\Friend\Friend $friend)
    {
        $this->friends[] = $friend;

        return $this;
    }

    /**
     * Remove friend
     *
     * @param \Ivoz\Domain\Model\Friend\Friend $friend
     */
    public function removeFriend(\Ivoz\Domain\Model\Friend\Friend $friend)
    {
        $this->friends->removeElement($friend);
    }

    /**
     * Replace friends
     *
     * @param \Ivoz\Domain\Model\Friend\Friend[] $friends
     * @return self
     */
    public function replaceFriends(array $friends)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($friends as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->friends as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->friends[$key] = $updatedEntities[$identity];
            } else {
                $this->removeFriend($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addFriend($entity);
        }

        return $this;
    }

    /**
     * Get friends
     *
     * @return array
     */
    public function getFriends(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->friends->matching($criteria)->toArray();
        }

        return $this->friends->toArray();
    }

    /**
     * Add companyService
     *
     * @param \Ivoz\Domain\Model\CompanyService\CompanyService $companyService
     *
     * @return CompanyTrait
     */
    public function addCompanyService(\Ivoz\Domain\Model\CompanyService\CompanyService $companyService)
    {
        $this->companyServices[] = $companyService;

        return $this;
    }

    /**
     * Remove companyService
     *
     * @param \Ivoz\Domain\Model\CompanyService\CompanyService $companyService
     */
    public function removeCompanyService(\Ivoz\Domain\Model\CompanyService\CompanyService $companyService)
    {
        $this->companyServices->removeElement($companyService);
    }

    /**
     * Replace companyServices
     *
     * @param \Ivoz\Domain\Model\CompanyService\CompanyService[] $companyServices
     * @return self
     */
    public function replaceCompanyServices(array $companyServices)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($companyServices as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->companyServices as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->companyServices[$key] = $updatedEntities[$identity];
            } else {
                $this->removeCompanyService($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addCompanyService($entity);
        }

        return $this;
    }

    /**
     * Get companyServices
     *
     * @return array
     */
    public function getCompanyServices(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->companyServices->matching($criteria)->toArray();
        }

        return $this->companyServices->toArray();
    }

    /**
     * Add terminal
     *
     * @param \Ivoz\Domain\Model\Terminal\Terminal $terminal
     *
     * @return CompanyTrait
     */
    public function addTerminal(\Ivoz\Domain\Model\Terminal\Terminal $terminal)
    {
        $this->terminals[] = $terminal;

        return $this;
    }

    /**
     * Remove terminal
     *
     * @param \Ivoz\Domain\Model\Terminal\Terminal $terminal
     */
    public function removeTerminal(\Ivoz\Domain\Model\Terminal\Terminal $terminal)
    {
        $this->terminals->removeElement($terminal);
    }

    /**
     * Replace terminals
     *
     * @param \Ivoz\Domain\Model\Terminal\Terminal[] $terminals
     * @return self
     */
    public function replaceTerminals(array $terminals)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($terminals as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->terminals as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->terminals[$key] = $updatedEntities[$identity];
            } else {
                $this->removeTerminal($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addTerminal($entity);
        }

        return $this;
    }

    /**
     * Get terminals
     *
     * @return array
     */
    public function getTerminals(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->terminals->matching($criteria)->toArray();
        }

        return $this->terminals->toArray();
    }

    /**
     * Add relPricingPlan
     *
     * @param \Ivoz\Domain\Model\PricingPlansRelCompany\PricingPlansRelCompany $relPricingPlan
     *
     * @return CompanyTrait
     */
    public function addRelPricingPlan(\Ivoz\Domain\Model\PricingPlansRelCompany\PricingPlansRelCompany $relPricingPlan)
    {
        $this->relPricingPlans[] = $relPricingPlan;

        return $this;
    }

    /**
     * Remove relPricingPlan
     *
     * @param \Ivoz\Domain\Model\PricingPlansRelCompany\PricingPlansRelCompany $relPricingPlan
     */
    public function removeRelPricingPlan(\Ivoz\Domain\Model\PricingPlansRelCompany\PricingPlansRelCompany $relPricingPlan)
    {
        $this->relPricingPlans->removeElement($relPricingPlan);
    }

    /**
     * Replace relPricingPlans
     *
     * @param \Ivoz\Domain\Model\PricingPlansRelCompany\PricingPlansRelCompany[] $relPricingPlans
     * @return self
     */
    public function replaceRelPricingPlans(array $relPricingPlans)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($relPricingPlans as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->relPricingPlans as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->relPricingPlans[$key] = $updatedEntities[$identity];
            } else {
                $this->removeRelPricingPlan($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addRelPricingPlan($entity);
        }

        return $this;
    }

    /**
     * Get relPricingPlans
     *
     * @return array
     */
    public function getRelPricingPlans(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->relPricingPlans->matching($criteria)->toArray();
        }

        return $this->relPricingPlans->toArray();
    }

    /**
     * Add musicsOnHold
     *
     * @param \Ivoz\Domain\Model\MusicOnHold\MusicOnHold $musicsOnHold
     *
     * @return CompanyTrait
     */
    public function addMusicsOnHold(\Ivoz\Domain\Model\MusicOnHold\MusicOnHold $musicsOnHold)
    {
        $this->musicsOnHold[] = $musicsOnHold;

        return $this;
    }

    /**
     * Remove musicsOnHold
     *
     * @param \Ivoz\Domain\Model\MusicOnHold\MusicOnHold $musicsOnHold
     */
    public function removeMusicsOnHold(\Ivoz\Domain\Model\MusicOnHold\MusicOnHold $musicsOnHold)
    {
        $this->musicsOnHold->removeElement($musicsOnHold);
    }

    /**
     * Replace musicsOnHold
     *
     * @param \Ivoz\Domain\Model\MusicOnHold\MusicOnHold[] $musicsOnHold
     * @return self
     */
    public function replaceMusicsOnHold(array $musicsOnHold)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($musicsOnHold as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->musicsOnHold as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->musicsOnHold[$key] = $updatedEntities[$identity];
            } else {
                $this->removeMusicsOnHold($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addMusicsOnHold($entity);
        }

        return $this;
    }

    /**
     * Get musicsOnHold
     *
     * @return array
     */
    public function getMusicsOnHold(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->musicsOnHold->matching($criteria)->toArray();
        }

        return $this->musicsOnHold->toArray();
    }

    /**
     * Add recording
     *
     * @param \Ivoz\Domain\Model\Recording\Recording $recording
     *
     * @return CompanyTrait
     */
    public function addRecording(\Ivoz\Domain\Model\Recording\Recording $recording)
    {
        $this->recordings[] = $recording;

        return $this;
    }

    /**
     * Remove recording
     *
     * @param \Ivoz\Domain\Model\Recording\Recording $recording
     */
    public function removeRecording(\Ivoz\Domain\Model\Recording\Recording $recording)
    {
        $this->recordings->removeElement($recording);
    }

    /**
     * Replace recordings
     *
     * @param \Ivoz\Domain\Model\Recording\Recording[] $recordings
     * @return self
     */
    public function replaceRecordings(array $recordings)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($recordings as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->recordings as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->recordings[$key] = $updatedEntities[$identity];
            } else {
                $this->removeRecording($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addRecording($entity);
        }

        return $this;
    }

    /**
     * Get recordings
     *
     * @return array
     */
    public function getRecordings(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->recordings->matching($criteria)->toArray();
        }

        return $this->recordings->toArray();
    }

    /**
     * Add relFeature
     *
     * @param \Ivoz\Domain\Model\FeaturesRelCompany\FeaturesRelCompany $relFeature
     *
     * @return CompanyTrait
     */
    public function addRelFeature(\Ivoz\Domain\Model\FeaturesRelCompany\FeaturesRelCompany $relFeature)
    {
        $this->relFeatures[] = $relFeature;

        return $this;
    }

    /**
     * Remove relFeature
     *
     * @param \Ivoz\Domain\Model\FeaturesRelCompany\FeaturesRelCompany $relFeature
     */
    public function removeRelFeature(\Ivoz\Domain\Model\FeaturesRelCompany\FeaturesRelCompany $relFeature)
    {
        $this->relFeatures->removeElement($relFeature);
    }

    /**
     * Replace relFeatures
     *
     * @param \Ivoz\Domain\Model\FeaturesRelCompany\FeaturesRelCompany[] $relFeatures
     * @return self
     */
    public function replaceRelFeatures(array $relFeatures)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($relFeatures as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
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
     * Add callACLPattern
     *
     * @param \Ivoz\Domain\Model\CallACLPattern\CallACLPattern $callACLPattern
     *
     * @return CompanyTrait
     */
    public function addCallACLPattern(\Ivoz\Domain\Model\CallACLPattern\CallACLPattern $callACLPattern)
    {
        $this->callACLPatterns[] = $callACLPattern;

        return $this;
    }

    /**
     * Remove callACLPattern
     *
     * @param \Ivoz\Domain\Model\CallACLPattern\CallACLPattern $callACLPattern
     */
    public function removeCallACLPattern(\Ivoz\Domain\Model\CallACLPattern\CallACLPattern $callACLPattern)
    {
        $this->callACLPatterns->removeElement($callACLPattern);
    }

    /**
     * Replace callACLPatterns
     *
     * @param \Ivoz\Domain\Model\CallACLPattern\CallACLPattern[] $callACLPatterns
     * @return self
     */
    public function replaceCallACLPatterns(array $callACLPatterns)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($callACLPatterns as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setCompany($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->callACLPatterns as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->callACLPatterns[$key] = $updatedEntities[$identity];
            } else {
                $this->removeCallACLPattern($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addCallACLPattern($entity);
        }

        return $this;
    }

    /**
     * Get callACLPatterns
     *
     * @return array
     */
    public function getCallACLPatterns(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->callACLPatterns->matching($criteria)->toArray();
        }

        return $this->callACLPatterns->toArray();
    }

    /**
     * Add domain
     *
     * @param \Ivoz\Domain\Model\Domain\Domain $domain
     *
     * @return CompanyTrait
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
            $entity->setCompany($this);
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


}

