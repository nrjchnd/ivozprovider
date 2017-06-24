<?php

namespace Core\Domain\Model\MusicOnHold;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * MusicOnHoldAbstract
 */
abstract class MusicOnHoldAbstract implements EntityInterface
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
     * @comment FSO:keepExtension
     * @var integer
     */
    protected $originalFileFileSize;

    /**
     * @var string
     */
    protected $originalFileMimeType;

    /**
     * @var string
     */
    protected $originalFileBaseName;

    /**
     * @comment FSO:keepExtension|storeInBaseFolder
     * @var integer
     */
    protected $encodedFileFileSize;

    /**
     * @var string
     */
    protected $encodedFileMimeType;

    /**
     * @var string
     */
    protected $encodedFileBaseName;

    /**
     * @comment enum:pending|encoding|ready|error
     * @var string
     */
    protected $status;

    /**
     * @var \Core\Domain\Model\Company\CompanyInterface
     */
    protected $company;


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
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return MusicOnHoldDTO
     */
    public static function createDTO()
    {
        return new MusicOnHoldDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto MusicOnHoldDTO
         */
        Assertion::isInstanceOf($dto, MusicOnHoldDTO::class);

        $self = new static(
            $dto->getName()
        );

        return $self
            ->setOriginalFileFileSize($dto->getOriginalFileFileSize())
            ->setOriginalFileMimeType($dto->getOriginalFileMimeType())
            ->setOriginalFileBaseName($dto->getOriginalFileBaseName())
            ->setEncodedFileFileSize($dto->getEncodedFileFileSize())
            ->setEncodedFileMimeType($dto->getEncodedFileMimeType())
            ->setEncodedFileBaseName($dto->getEncodedFileBaseName())
            ->setStatus($dto->getStatus())
            ->setCompany($dto->getCompany());
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto MusicOnHoldDTO
         */
        Assertion::isInstanceOf($dto, MusicOnHoldDTO::class);

        $this
            ->setName($dto->getName())
            ->setOriginalFileFileSize($dto->getOriginalFileFileSize())
            ->setOriginalFileMimeType($dto->getOriginalFileMimeType())
            ->setOriginalFileBaseName($dto->getOriginalFileBaseName())
            ->setEncodedFileFileSize($dto->getEncodedFileFileSize())
            ->setEncodedFileMimeType($dto->getEncodedFileMimeType())
            ->setEncodedFileBaseName($dto->getEncodedFileBaseName())
            ->setStatus($dto->getStatus())
            ->setCompany($dto->getCompany());


        return $this;
    }

    /**
     * @return MusicOnHoldDTO
     */
    public function toDTO()
    {
        return static::createDTO()
            ->setId($this->getId())
            ->setName($this->getName())
            ->setOriginalFileFileSize($this->getOriginalFileFileSize())
            ->setOriginalFileMimeType($this->getOriginalFileMimeType())
            ->setOriginalFileBaseName($this->getOriginalFileBaseName())
            ->setEncodedFileFileSize($this->getEncodedFileFileSize())
            ->setEncodedFileMimeType($this->getEncodedFileMimeType())
            ->setEncodedFileBaseName($this->getEncodedFileBaseName())
            ->setStatus($this->getStatus())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'originalFileFileSize' => $this->getOriginalFileFileSize(),
            'originalFileMimeType' => $this->getOriginalFileMimeType(),
            'originalFileBaseName' => $this->getOriginalFileBaseName(),
            'encodedFileFileSize' => $this->getEncodedFileFileSize(),
            'encodedFileMimeType' => $this->getEncodedFileMimeType(),
            'encodedFileBaseName' => $this->getEncodedFileBaseName(),
            'status' => $this->getStatus(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null
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
     * @return self
     */
    protected function setName($name)
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
     * Set originalFileFileSize
     *
     * @param integer $originalFileFileSize
     *
     * @return self
     */
    protected function setOriginalFileFileSize($originalFileFileSize = null)
    {
        if (!is_null($originalFileFileSize)) {
            if (!is_null($originalFileFileSize)) {
                Assertion::integerish($originalFileFileSize);
                Assertion::greaterOrEqualThan($originalFileFileSize, 0);
            }
        }

        $this->originalFileFileSize = $originalFileFileSize;

        return $this;
    }

    /**
     * Get originalFileFileSize
     *
     * @return integer
     */
    public function getOriginalFileFileSize()
    {
        return $this->originalFileFileSize;
    }

    /**
     * Set originalFileMimeType
     *
     * @param string $originalFileMimeType
     *
     * @return self
     */
    protected function setOriginalFileMimeType($originalFileMimeType = null)
    {
        if (!is_null($originalFileMimeType)) {
            Assertion::maxLength($originalFileMimeType, 80);
        }

        $this->originalFileMimeType = $originalFileMimeType;

        return $this;
    }

    /**
     * Get originalFileMimeType
     *
     * @return string
     */
    public function getOriginalFileMimeType()
    {
        return $this->originalFileMimeType;
    }

    /**
     * Set originalFileBaseName
     *
     * @param string $originalFileBaseName
     *
     * @return self
     */
    protected function setOriginalFileBaseName($originalFileBaseName = null)
    {
        if (!is_null($originalFileBaseName)) {
            Assertion::maxLength($originalFileBaseName, 255);
        }

        $this->originalFileBaseName = $originalFileBaseName;

        return $this;
    }

    /**
     * Get originalFileBaseName
     *
     * @return string
     */
    public function getOriginalFileBaseName()
    {
        return $this->originalFileBaseName;
    }

    /**
     * Set encodedFileFileSize
     *
     * @param integer $encodedFileFileSize
     *
     * @return self
     */
    protected function setEncodedFileFileSize($encodedFileFileSize = null)
    {
        if (!is_null($encodedFileFileSize)) {
            if (!is_null($encodedFileFileSize)) {
                Assertion::integerish($encodedFileFileSize);
                Assertion::greaterOrEqualThan($encodedFileFileSize, 0);
            }
        }

        $this->encodedFileFileSize = $encodedFileFileSize;

        return $this;
    }

    /**
     * Get encodedFileFileSize
     *
     * @return integer
     */
    public function getEncodedFileFileSize()
    {
        return $this->encodedFileFileSize;
    }

    /**
     * Set encodedFileMimeType
     *
     * @param string $encodedFileMimeType
     *
     * @return self
     */
    protected function setEncodedFileMimeType($encodedFileMimeType = null)
    {
        if (!is_null($encodedFileMimeType)) {
            Assertion::maxLength($encodedFileMimeType, 80);
        }

        $this->encodedFileMimeType = $encodedFileMimeType;

        return $this;
    }

    /**
     * Get encodedFileMimeType
     *
     * @return string
     */
    public function getEncodedFileMimeType()
    {
        return $this->encodedFileMimeType;
    }

    /**
     * Set encodedFileBaseName
     *
     * @param string $encodedFileBaseName
     *
     * @return self
     */
    protected function setEncodedFileBaseName($encodedFileBaseName = null)
    {
        if (!is_null($encodedFileBaseName)) {
            Assertion::maxLength($encodedFileBaseName, 255);
        }

        $this->encodedFileBaseName = $encodedFileBaseName;

        return $this;
    }

    /**
     * Get encodedFileBaseName
     *
     * @return string
     */
    public function getEncodedFileBaseName()
    {
        return $this->encodedFileBaseName;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return self
     */
    protected function setStatus($status = null)
    {
        if (!is_null($status)) {
            Assertion::maxLength($status, 20);
        Assertion::choice($status, array (
          0 => '    pending',
          1 => '    encoding',
          2 => '    ready',
          3 => '    error',
        ));
        }

        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set company
     *
     * @param \Core\Domain\Model\Company\CompanyInterface $company
     *
     * @return self
     */
    protected function setCompany(\Core\Domain\Model\Company\CompanyInterface $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }



    // @codeCoverageIgnoreEnd
}

