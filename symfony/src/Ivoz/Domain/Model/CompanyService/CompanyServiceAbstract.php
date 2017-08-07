<?php
namespace Ivoz\Domain\Model\CompanyService;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * CompanyServiceAbstract
 */
abstract class CompanyServiceAbstract
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var \Ivoz\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Ivoz\Domain\Model\Service\ServiceInterface
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
     * @return CompanyServiceDTO
     */
    public static function createDTO()
    {
        return new CompanyServiceDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto CompanyServiceDTO
         */
        Assertion::isInstanceOf($dto, CompanyServiceDTO::class);

        $self = new static(
            $dto->getCode());

        return $self
            ->setCompany($dto->getCompany())
            ->setService($dto->getService())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
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
        return self::createDTO()
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
            'code' => $this->getCode(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'serviceId' => $this->getService() ? $this->getService()->getId() : null
        ];
    }


    // @codeCoverageIgnoreStart

    /**
     * Set code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
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
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return self
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set service
     *
     * @param \Ivoz\Domain\Model\Service\ServiceInterface $service
     *
     * @return self
     */
    public function setService(\Ivoz\Domain\Model\Service\ServiceInterface $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Ivoz\Domain\Model\Service\ServiceInterface
     */
    public function getService()
    {
        return $this->service;
    }



    // @codeCoverageIgnoreEnd
}

