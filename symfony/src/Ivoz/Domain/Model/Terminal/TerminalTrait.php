<?php
namespace Ivoz\Domain\Model\Terminal;

use Core\Application\DataTransferObjectInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * TerminalTrait
 */
trait TerminalTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $astPsEndpoints;


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
        $this->astPsEndpoints = new ArrayCollection();
    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return TerminalDTO
     */
    public static function createDTO()
    {
        return new TerminalDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TerminalDTO
         */
        $self = parent::fromDTO($dto);

        return $self
            ->replaceAstPsEndpoints($dto->getAstPsEndpoints())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TerminalDTO
         */
        parent::updateFromDTO($dto);

        $this
            ->replaceAstPsEndpoints($dto->getAstPsEndpoints());


        return $this;
    }

    /**
     * @return TerminalDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId())
            ->setAstPsEndpoints($this->getAstPsEndpoints());
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
     * Add astPsEndpoint
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint $astPsEndpoint
     *
     * @return TerminalTrait
     */
    public function addAstPsEndpoint(\Ast\Domain\Model\PsEndpoint\PsEndpoint $astPsEndpoint)
    {
        $this->astPsEndpoints[] = $astPsEndpoint;

        return $this;
    }

    /**
     * Remove astPsEndpoint
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint $astPsEndpoint
     */
    public function removeAstPsEndpoint(\Ast\Domain\Model\PsEndpoint\PsEndpoint $astPsEndpoint)
    {
        $this->astPsEndpoints->removeElement($astPsEndpoint);
    }

    /**
     * Replace astPsEndpoints
     *
     * @param \Ast\Domain\Model\PsEndpoint\PsEndpoint[] $astPsEndpoints
     * @return self
     */
    public function replaceAstPsEndpoints(array $astPsEndpoints)
    {
        $updatedEntities = [];
        $fallBackId = -1;
        foreach ($astPsEndpoints as $entity) {
            $index = $entity->getId() ? $entity->getId() : $fallBackId--;
            $updatedEntities[$index] = $entity;
            $entity->setTerminal($this);
        }
        $updatedEntityKeys = array_keys($updatedEntities);

        foreach ($this->astPsEndpoints as $key => $entity) {
            $identity = $entity->getId();
            if (in_array($identity, $updatedEntityKeys)) {
                $this->astPsEndpoints[$key] = $updatedEntities[$identity];
            } else {
                $this->removeAstPsEndpoint($key);
            }
            unset($updatedEntities[$identity]);
        }

        foreach ($updatedEntities as $entity) {
            $this->addAstPsEndpoint($entity);
        }

        return $this;
    }

    /**
     * Get astPsEndpoints
     *
     * @return array
     */
    public function getAstPsEndpoints(Criteria $criteria = null)
    {
        if (!is_null($criteria)) {
            return $this->astPsEndpoints->matching($criteria)->toArray();
        }

        return $this->astPsEndpoints->toArray();
    }


}

