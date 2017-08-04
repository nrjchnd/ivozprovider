<?php
namespace Kam\Domain\Model\TrunksDomainAttr;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * TrunksDomainAttrAbstract
 */
abstract class TrunksDomainAttrAbstract
{
    /**
     * @var string
     */
    protected $did;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    /**
     * @column last_modified
     * @var \DateTime
     */
    protected $lastModified = '1900-01-01 00:00:01';


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct(
        $did,
        $name,
        $type,
        $value,
        $lastModified
    ) {
        $this->setDid($did);
        $this->setName($name);
        $this->setType($type);
        $this->setValue($value);
        $this->setLastModified($lastModified);
        $this->initChangelog();
    }

    public function initChangelog()
    {
        $this->_initialValues = $this->__toArray();
    }

    public function hasChanged($fieldName)
    {
        if (array_key_exists($fieldName, $this->_initialValues)) {
            throw new \Exception($fieldName . ' field was not found');
        }
        $getter = 'get' . ucfisrt($fieldName);

        return $this->$getter() != $this->_initialValues[$fieldName];
    }

    /**
     * @return TrunksDomainAttrDTO
     */
    public static function createDTO()
    {
        return new TrunksDomainAttrDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TrunksDomainAttrDTO
         */
        Assertion::isInstanceOf($dto, TrunksDomainAttrDTO::class);

        $self = new static(
            $dto->getDid(),
            $dto->getName(),
            $dto->getType(),
            $dto->getValue(),
            $dto->getLastModified());

        return $self;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto TrunksDomainAttrDTO
         */
        Assertion::isInstanceOf($dto, TrunksDomainAttrDTO::class);

        $this
            ->setDid($dto->getDid())
            ->setName($dto->getName())
            ->setType($dto->getType())
            ->setValue($dto->getValue())
            ->setLastModified($dto->getLastModified());


        return $this;
    }

    /**
     * @return TrunksDomainAttrDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setDid($this->getDid())
            ->setName($this->getName())
            ->setType($this->getType())
            ->setValue($this->getValue())
            ->setLastModified($this->getLastModified());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'did' => $this->getDid(),
            'name' => $this->getName(),
            'type' => $this->getType(),
            'value' => $this->getValue(),
            'lastModified' => $this->getLastModified()
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set did
     *
     * @param string $did
     *
     * @return self
     */
    public function setDid($did)
    {
        Assertion::notNull($did);
        Assertion::maxLength($did, 190);

        $this->did = $did;

        return $this;
    }

    /**
     * Get did
     *
     * @return string
     */
    public function getDid()
    {
        return $this->did;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        Assertion::notNull($name);
        Assertion::maxLength($name, 32);

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
     * Set type
     *
     * @param integer $type
     *
     * @return self
     */
    public function setType($type)
    {
        Assertion::notNull($type);
        Assertion::integerish($type);
        Assertion::greaterOrEqualThan($type, 0);

        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue($value)
    {
        Assertion::notNull($value);
        Assertion::maxLength($value, 255);

        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified)
    {
        Assertion::notNull($lastModified);

        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }



    // @codeCoverageIgnoreEnd
}

