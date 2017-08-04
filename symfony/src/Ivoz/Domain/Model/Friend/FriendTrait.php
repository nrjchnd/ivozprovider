<?php
namespace Ivoz\Domain\Model\Friend;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * FriendTrait
 */
trait FriendTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $psEndpoints;


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
        $this->psEndpoints = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return FriendDTO
     */
    public static function createDTO()
    {
        return new FriendDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FriendDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replacePsEndpoints($dto->getPsEndpoints())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FriendDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replacePsEndpoints($dto->getPsEndpoints());


        return $this;
    }

    /**
     * @return FriendDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setPsEndpoints($this->getPsEndpoints());
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
     * Add psEndpoint
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint $psEndpoint
     *
     * @return FriendTrait
     */
    public function addPsEndpoint(\Ast\Domain\Model\PsEndpoint\PsEndpoint $psEndpoint)
    {
        $this->psEndpoints[] = $psEndpoint;

        return $this;
    }

    /**
     * Remove psEndpoint
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint $psEndpoint
     */
    public function removePsEndpoint(\Ast\Domain\Model\PsEndpoint\PsEndpoint $psEndpoint)
    {
        $this->psEndpoints->removeElement($psEndpoint);
    }

    /**
     * Replace psEndpoints
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint[] $psEndpoints
     * @return self
     */
    public function replacePsEndpoints(array $psEndpoints)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($psEndpoints as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setFriend($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->psEndpoints as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->psEndpoints[$key] = $updatedEntities[$identity];
            } else {
                $this->removePsEndpoint($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addPsEndpoint($entity);
        }

        return $this;
    }

    /**
     * Get psEndpoints
     *
     * @return array
     */
    public function getPsEndpoints(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->psEndpoints->matching($criteria)->toArray();
        }

        return $this->psEndpoints->toArray();
    }


}

