<?php
namespace Ast\Domain\Model\Musiconhold;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * MusiconholdAbstract
 */
abstract class MusiconholdAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $mode;

    /**
     * @var string
     */
    protected $directory;

    /**
     * @var string
     */
    protected $application;

    /**
     * @var string
     */
    protected $digit;

    /**
     * @var string
     */
    protected $sort;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var \DateTime
     */
    protected $stamp;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($name)
    {
        $this->setName($name);
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
     * @return MusiconholdDTO
     */
    public static function createDTO()
    {
        return new MusiconholdDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto MusiconholdDTO
         */
        Assertion::isInstanceOf($dto, MusiconholdDTO::class);

        $self = new static(
            $dto->getName());

        return $self
            ->setMode($dto->getMode())
            ->setDirectory($dto->getDirectory())
            ->setApplication($dto->getApplication())
            ->setDigit($dto->getDigit())
            ->setSort($dto->getSort())
            ->setFormat($dto->getFormat())
            ->setStamp($dto->getStamp())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto MusiconholdDTO
         */
        Assertion::isInstanceOf($dto, MusiconholdDTO::class);

        $this
            ->setName($dto->getName())
            ->setMode($dto->getMode())
            ->setDirectory($dto->getDirectory())
            ->setApplication($dto->getApplication())
            ->setDigit($dto->getDigit())
            ->setSort($dto->getSort())
            ->setFormat($dto->getFormat())
            ->setStamp($dto->getStamp());


        return $this;
    }

    /**
     * @return MusiconholdDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setName($this->getName())
            ->setMode($this->getMode())
            ->setDirectory($this->getDirectory())
            ->setApplication($this->getApplication())
            ->setDigit($this->getDigit())
            ->setSort($this->getSort())
            ->setFormat($this->getFormat())
            ->setStamp($this->getStamp());
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'name' => $this->getName(),
            'mode' => $this->getMode(),
            'directory' => $this->getDirectory(),
            'application' => $this->getApplication(),
            'digit' => $this->getDigit(),
            'sort' => $this->getSort(),
            'format' => $this->getFormat(),
            'stamp' => $this->getStamp()
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
        Assertion::maxLength($name, 80);

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
     * Set mode
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        if (!is_null($mode)) {
        }

        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set directory
     *
     * @param string $directory
     *
     * @return self
     */
    public function setDirectory($directory = null)
    {
        if (!is_null($directory)) {
            Assertion::maxLength($directory, 255);
        }

        $this->directory = $directory;

        return $this;
    }

    /**
     * Get directory
     *
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Set application
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication($application = null)
    {
        if (!is_null($application)) {
            Assertion::maxLength($application, 255);
        }

        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set digit
     *
     * @param string $digit
     *
     * @return self
     */
    public function setDigit($digit = null)
    {
        if (!is_null($digit)) {
            Assertion::maxLength($digit, 1);
        }

        $this->digit = $digit;

        return $this;
    }

    /**
     * Get digit
     *
     * @return string
     */
    public function getDigit()
    {
        return $this->digit;
    }

    /**
     * Set sort
     *
     * @param string $sort
     *
     * @return self
     */
    public function setSort($sort = null)
    {
        if (!is_null($sort)) {
            Assertion::maxLength($sort, 10);
        }

        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format = null)
    {
        if (!is_null($format)) {
            Assertion::maxLength($format, 10);
        }

        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set stamp
     *
     * @param \DateTime $stamp
     *
     * @return self
     */
    public function setStamp($stamp = null)
    {
        if (!is_null($stamp)) {
        }

        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->stamp;
    }



    // @codeCoverageIgnoreEnd
}

