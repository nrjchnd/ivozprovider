<?php

namespace Core\Domain\Model\ProxyUser;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * ProxyUser
 */
class ProxyUser implements EntityInterface, ProxyUserInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $ip;


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

    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return ProxyUserDTO
     */
    public static function createDTO()
    {
        return new ProxyUserDTO();
    }

    /**
     * Factory method
     * @param ProxyUserDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, ProxyUserDTO::class);

        $self = new self();

        return $self
            ->setName($dto->getName())
            ->setIp($dto->getIp());
    }

    /**
     * @param ProxyUserDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, ProxyUserDTO::class);

        $this
            ->setName($dto->getName())
            ->setIp($dto->getIp());


        return $this;
    }

    /**
     * @return ProxyUserDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setName($this->getName())
            ->setIp($this->getIp());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'ip' => $this->getIp()
        ];
    }


    // @codeCoverageIgnoreStart

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
     * Set name
     *
     * @param string $name
     *
     * @return ProxyUser
     */
    protected function setName($name = null)
    {
        if (!is_null($name)) {
            Assertion::maxLength($name, 100);
        }

        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ProxyUser
     */
    protected function setIp($ip = null)
    {
        if (!is_null($ip)) {
            Assertion::maxLength($ip, 50);
        }

        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }



    // @codeCoverageIgnoreEnd
}
