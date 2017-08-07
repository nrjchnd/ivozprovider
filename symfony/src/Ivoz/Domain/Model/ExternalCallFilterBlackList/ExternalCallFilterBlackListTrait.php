<?php
namespace Ivoz\Domain\Model\ExternalCallFilterBlackList;

use Core\Application\DataTransferObjectInterface;

/**
 * ExternalCallFilterBlackListTrait
 */
trait ExternalCallFilterBlackListTrait
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(...func_get_args());

    }

    public function __wakeup()
    {
        if ($this->id) {
            $this->initChangelog();
        }
        // Do nothing: Doctrines requirement
    }

    /**
     * @return ExternalCallFilterBlackListDTO
     */
    public static function createDTO()
    {
        return new ExternalCallFilterBlackListDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterBlackListDTO
         */
        $self = parent::fromDTO($dto);

        return $self;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto ExternalCallFilterBlackListDTO
         */
        parent::updateFromDTO($dto);

        
        return $this;
    }

    /**
     * @return ExternalCallFilterBlackListDTO
     */
    public function toDTO()
    {
        $dto = parent::toDTO();
        return $dto
            ->setId($this->getId());
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


}

