<?php
namespace Ivoz\Domain\Model\HuntGroup;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * HuntGroupTrait
 */
trait HuntGroupTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $huntGroupsRelUsers;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(...func_get_args());
        $this->huntGroupsRelUsers = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->initChangelog();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return HuntGroupDTO
     */
    public static function createDTO()
    {
        return new HuntGroupDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto HuntGroupDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replaceHuntGroupsRelUsers($dto->getHuntGroupsRelUsers())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto HuntGroupDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replaceHuntGroupsRelUsers($dto->getHuntGroupsRelUsers());


        return $this;
    }

    /**
     * @return HuntGroupDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setHuntGroupsRelUsers($this->getHuntGroupsRelUsers());
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
     * Add huntGroupsRelUser
     *
     * @param \Ivoz\Domain\Model\HuntGroupsRelUser\HuntGroupsRelUserInterface $huntGroupsRelUser
     *
     * @return HuntGroupTrait
     */
    public function addHuntGroupsRelUser(\Ivoz\Domain\Model\HuntGroupsRelUser\HuntGroupsRelUserInterface $huntGroupsRelUser)
    {
        $this->huntGroupsRelUsers[] = $huntGroupsRelUser;

        return $this;
    }

    /**
     * Remove huntGroupsRelUser
     *
     * @param \Ivoz\Domain\Model\HuntGroupsRelUser\HuntGroupsRelUserInterface $huntGroupsRelUser
     */
    public function removeHuntGroupsRelUser(\Ivoz\Domain\Model\HuntGroupsRelUser\HuntGroupsRelUserInterface $huntGroupsRelUser)
    {
        $this->huntGroupsRelUsers->removeElement($huntGroupsRelUser);
    }

    /**
     * Replace huntGroupsRelUsers
     *
     * @param \Ivoz\Domain\Model\HuntGroupsRelUser\HuntGroupsRelUserInterface[] $huntGroupsRelUsers
     * @return self
     */
    public function replaceHuntGroupsRelUsers(array $huntGroupsRelUsers)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($huntGroupsRelUsers as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setHuntGroup($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->huntGroupsRelUsers as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->huntGroupsRelUsers[$key] = $updatedEntities[$identity];
            } else {
                $this->removeHuntGroupsRelUser($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addHuntGroupsRelUser($entity);
        }

        return $this;
    }

    /**
     * Get huntGroupsRelUsers
     *
     * @return array
     */
    public function getHuntGroupsRelUsers(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->huntGroupsRelUsers->matching($criteria)->toArray();
        }

        return $this->huntGroupsRelUsers->toArray();
    }


}

