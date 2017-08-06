<?php

namespace Ivoz\Domain\Model\GenericCallACLPattern;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * GenericCallACLPatternAbstract
 */
abstract class GenericCallACLPatternAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $regExp;

    /**
     * @var \Ivoz\Domain\Model\Brand\BrandInterface
     */
    protected $brand;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($name, $regExp)
    {
        $this->setName($name);
        $this->setRegExp($regExp);
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
     * @return GenericCallACLPatternDTO
     */
    public static function createDTO()
    {
        return new GenericCallACLPatternDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto GenericCallACLPatternDTO
         */
        Assertion::isInstanceOf($dto, GenericCallACLPatternDTO::class);

        $self = new static(
            $dto->getName(),
            $dto->getRegExp());

        return $self
            ->setBrand($dto->getBrand())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto GenericCallACLPatternDTO
         */
        Assertion::isInstanceOf($dto, GenericCallACLPatternDTO::class);

        $this
            ->setName($dto->getName())
            ->setRegExp($dto->getRegExp())
            ->setBrand($dto->getBrand());


        return $this;
    }

    /**
     * @return GenericCallACLPatternDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setName($this->getName())
            ->setRegExp($this->getRegExp())
            ->setBrandId($this->getBrand() ? $this->getBrand()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'name' => $this->getName(),
            'regExp' => $this->getRegExp(),
            'brandId' => $this->getBrand() ? $this->getBrand()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

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
        Assertion::maxLength($name, 50);

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
     * Set regExp
     *
     * @param string $regExp
     *
     * @return self
     */
    public function setRegExp($regExp)
    {
        Assertion::notNull($regExp);
        Assertion::maxLength($regExp, 255);

        $this->regExp = $regExp;

        return $this;
    }

    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp()
    {
        return $this->regExp;
    }

    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return self
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }



    // @codeCoverageIgnoreEnd
}

