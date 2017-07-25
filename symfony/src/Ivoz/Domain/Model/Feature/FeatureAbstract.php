<?php
namespace Ivoz\Domain\Model\Feature;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * FeatureAbstract
 */
abstract class FeatureAbstract
{
    /**
     * @var string
     */
    protected $iden;

    /**
     * @comment ml
     * @var string
     */
    protected $name = '';

    /**
     * @column name_en
     * @var string
     */
    protected $nameEn = '';

    /**
     * @column name_es
     * @var string
     */
    protected $nameEs = '';


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($iden, $name, $nameEn, $nameEs)
    {
        $this->setIden($iden);
        $this->setName($name);
        $this->setNameEn($nameEn);
        $this->setNameEs($nameEs);
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
     * @return FeatureDTO
     */
    public static function createDTO()
    {
        return new FeatureDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FeatureDTO
         */
        Assertion::isInstanceOf($dto, FeatureDTO::class);

        $self = new static(
            $dto->getIden(),
            $dto->getName(),
            $dto->getNameEn(),
            $dto->getNameEs());

        return $self;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto FeatureDTO
         */
        Assertion::isInstanceOf($dto, FeatureDTO::class);

        $this
            ->setIden($dto->getIden())
            ->setName($dto->getName())
            ->setNameEn($dto->getNameEn())
            ->setNameEs($dto->getNameEs());


        return $this;
    }

    /**
     * @return FeatureDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setIden($this->getIden())
            ->setName($this->getName())
            ->setNameEn($this->getNameEn())
            ->setNameEs($this->getNameEs());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'iden' => $this->getIden(),
            'name' => $this->getName(),
            'nameEn' => $this->getNameEn(),
            'nameEs' => $this->getNameEs()
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set iden
     *
     * @param string $iden
     *
     * @return self
     */
    public function setIden($iden)
    {
        Assertion::notNull($iden);
        Assertion::maxLength($iden, 100);

        $this->iden = $iden;

        return $this;
    }

    /**
     * Get iden
     *
     * @return string
     */
    public function getIden()
    {
        return $this->iden;
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
     * Set nameEn
     *
     * @param string $nameEn
     *
     * @return self
     */
    public function setNameEn($nameEn)
    {
        Assertion::notNull($nameEn);
        Assertion::maxLength($nameEn, 50);

        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set nameEs
     *
     * @param string $nameEs
     *
     * @return self
     */
    public function setNameEs($nameEs)
    {
        Assertion::notNull($nameEs);
        Assertion::maxLength($nameEs, 50);

        $this->nameEs = $nameEs;

        return $this;
    }

    /**
     * Get nameEs
     *
     * @return string
     */
    public function getNameEs()
    {
        return $this->nameEs;
    }



    // @codeCoverageIgnoreEnd
}

