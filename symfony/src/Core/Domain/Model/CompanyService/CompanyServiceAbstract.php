<?php

namespace Core\Domain\Model\CompanyService;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * CompanyServiceAbstract
 */
abstract class CompanyServiceAbstract implements EntityInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var \Core\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Core\Domain\Model\Service\ServiceInterface
     */
    protected $service;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($code)
    {
        $this->setCode($code);
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return CompanyServiceDTO
     */
    public static function createDTO()
    {
        return new CompanyServiceDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CompanyServiceDTO
         */
        Assertion::isInstanceOf($dto, CompanyServiceDTO::class);

        $self = new static(
            $dto->getCode()
        );

        return $self
            ->setCompany($dto->getCompany())
            ->setService($dto->getService());
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return static
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CompanyServiceDTO
         */
        Assertion::isInstanceOf($dto, CompanyServiceDTO::class);

        $this
            ->setCode($dto->getCode())
            ->setCompany($dto->getCompany())
            ->setService($dto->getService());


        return $this;
    }

    /**
     * @return CompanyServiceDTO
     */
    public function toDTO()
    {
        return static::createDTO()
            ->setId($this->getId())
            ->setCode($this->getCode())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setServiceId($this->getService() ? $this->getService()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'code' => $this->getCode(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'serviceId' => $this->getService() ? $this->getService()->getId() : null
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
     * Set code
     *
     * @param string $code
     *
     * @return self
     */
    protected function setCode($code)
    {
        Assertion::notNull($code);
        Assertion::maxLength($code, 3);

        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
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

    /**
     * Set service
     *
     * @param \Core\Domain\Model\Service\ServiceInterface $service
     *
     * @return self
     */
    protected function setService(\Core\Domain\Model\Service\ServiceInterface $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Core\Domain\Model\Service\ServiceInterface
     */
    public function getService()
    {
        return $this->service;
    }



    // @codeCoverageIgnoreEnd
}

