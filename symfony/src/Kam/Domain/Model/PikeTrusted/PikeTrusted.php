<?php

namespace Kam\Domain\Model\PikeTrusted;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * PikeTrusted
 */
class PikeTrusted
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @column src_ip
     * @var string
     */
    protected $srcIp;

    /**
     * @var string
     */
    protected $proto;

    /**
     * @column from_pattern
     * @var string
     */
    protected $fromPattern;

    /**
     * @column ruri_pattern
     * @var string
     */
    protected $ruriPattern;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var integer
     */
    protected $priority = '0';


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($priority)
    {
        $this->setPriority($priority);
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return PikeTrustedDTO
     */
    public static function createDTO()
    {
        return new PikeTrustedDTO();
    }

    /**
     * Factory method
     * @param PikeTrustedDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, PikeTrustedDTO::class);

        $self = new self(
            $dto->getPriority()
        );

        return $self
            ->setSrcIp($dto->getSrcIp())
            ->setProto($dto->getProto())
            ->setFromPattern($dto->getFromPattern())
            ->setRuriPattern($dto->getRuriPattern())
            ->setTag($dto->getTag());
    }

    /**
     * @param PikeTrustedDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, PikeTrustedDTO::class);

        $this
            ->setSrcIp($dto->getSrcIp())
            ->setProto($dto->getProto())
            ->setFromPattern($dto->getFromPattern())
            ->setRuriPattern($dto->getRuriPattern())
            ->setTag($dto->getTag())
            ->setPriority($dto->getPriority());


        return $this;
    }

    /**
     * @return PikeTrustedDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setSrcIp($this->getSrcIp())
            ->setProto($this->getProto())
            ->setFromPattern($this->getFromPattern())
            ->setRuriPattern($this->getRuriPattern())
            ->setTag($this->getTag())
            ->setPriority($this->getPriority());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'srcIp' => $this->getSrcIp(),
            'proto' => $this->getProto(),
            'fromPattern' => $this->getFromPattern(),
            'ruriPattern' => $this->getRuriPattern(),
            'tag' => $this->getTag(),
            'priority' => $this->getPriority()
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
     * Set srcIp
     *
     * @param string $srcIp
     *
     * @return PikeTrusted
     */
    protected function setSrcIp($srcIp = null)
    {
        if (!is_null($srcIp)) {
            Assertion::maxLength($srcIp, 50);
        }

        $this->srcIp = $srcIp;

        return $this;
    }

    /**
     * Get srcIp
     *
     * @return string
     */
    public function getSrcIp()
    {
        return $this->srcIp;
    }

    /**
     * Set proto
     *
     * @param string $proto
     *
     * @return PikeTrusted
     */
    protected function setProto($proto = null)
    {
        if (!is_null($proto)) {
            Assertion::maxLength($proto, 4);
        }

        $this->proto = $proto;

        return $this;
    }

    /**
     * Get proto
     *
     * @return string
     */
    public function getProto()
    {
        return $this->proto;
    }

    /**
     * Set fromPattern
     *
     * @param string $fromPattern
     *
     * @return PikeTrusted
     */
    protected function setFromPattern($fromPattern = null)
    {
        if (!is_null($fromPattern)) {
            Assertion::maxLength($fromPattern, 64);
        }

        $this->fromPattern = $fromPattern;

        return $this;
    }

    /**
     * Get fromPattern
     *
     * @return string
     */
    public function getFromPattern()
    {
        return $this->fromPattern;
    }

    /**
     * Set ruriPattern
     *
     * @param string $ruriPattern
     *
     * @return PikeTrusted
     */
    protected function setRuriPattern($ruriPattern = null)
    {
        if (!is_null($ruriPattern)) {
            Assertion::maxLength($ruriPattern, 64);
        }

        $this->ruriPattern = $ruriPattern;

        return $this;
    }

    /**
     * Get ruriPattern
     *
     * @return string
     */
    public function getRuriPattern()
    {
        return $this->ruriPattern;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return PikeTrusted
     */
    protected function setTag($tag = null)
    {
        if (!is_null($tag)) {
            Assertion::maxLength($tag, 64);
        }

        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return PikeTrusted
     */
    protected function setPriority($priority)
    {
        Assertion::notNull($priority);
        Assertion::integerish($priority);

        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }



    // @codeCoverageIgnoreEnd
}
