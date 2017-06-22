<?php

namespace Core\Domain\Model\Fax;

use Assert\Assertion;
use Core\Domain\Model\EntityInterface;
use Core\Application\DataTransferObjectInterface;

/**
 * Fax
 */
class Fax implements EntityInterface, FaxInterface
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
    protected $email;

    /**
     * @var boolean
     */
    protected $sendByEmail = '1';

    /**
     * @var \Core\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Core\Domain\Model\DDI\DDIInterface
     */
    protected $outgoingDDI;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($name, $sendByEmail)
    {
        $this->setName($name);
        $this->setSendByEmail($sendByEmail);
    }

     public function __wakeup()
     {
        if ($this->id) {
            $this->_initialValues = $this->__toArray();
        }
        // Do nothing: Doctrines requirement
     }

    /**
     * @return FaxDTO
     */
    public static function createDTO()
    {
        return new FaxDTO();
    }

    /**
     * Factory method
     * @param FaxDTO $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FaxDTO::class);

        $self = new self(
            $dto->getName(),
            $dto->getSendByEmail()
        );

        return $self
            ->setEmail($dto->getEmail())
            ->setCompany($dto->getCompany())
            ->setOutgoingDDI($dto->getOutgoingDDI());
    }

    /**
     * @param FaxDTO $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        Assertion::isInstanceOf($dto, FaxDTO::class);

        $this
            ->setName($dto->getName())
            ->setEmail($dto->getEmail())
            ->setSendByEmail($dto->getSendByEmail())
            ->setCompany($dto->getCompany())
            ->setOutgoingDDI($dto->getOutgoingDDI());


        return $this;
    }

    /**
     * @return FaxDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setId($this->getId())
            ->setName($this->getName())
            ->setEmail($this->getEmail())
            ->setSendByEmail($this->getSendByEmail())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setOutgoingDDIId($this->getOutgoingDDI() ? $this->getOutgoingDDI()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'sendByEmail' => $this->getSendByEmail(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'outgoingDDIId' => $this->getOutgoingDDI() ? $this->getOutgoingDDI()->getId() : null
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
     * @return Fax
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
     * Set email
     *
     * @param string $email
     *
     * @return Fax
     */
    protected function setEmail($email = null)
    {
        if (!is_null($email)) {
            Assertion::maxLength($email, 255);
        }

        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sendByEmail
     *
     * @param boolean $sendByEmail
     *
     * @return Fax
     */
    protected function setSendByEmail($sendByEmail)
    {
        Assertion::notNull($sendByEmail);
        Assertion::between(intval($sendByEmail), 0, 1);

        $this->sendByEmail = $sendByEmail;

        return $this;
    }

    /**
     * Get sendByEmail
     *
     * @return boolean
     */
    public function getSendByEmail()
    {
        return $this->sendByEmail;
    }

    /**
     * Set company
     *
     * @param \Core\Domain\Model\Company\CompanyInterface $company
     *
     * @return Fax
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
     * Set outgoingDDI
     *
     * @param \Core\Domain\Model\DDI\DDIInterface $outgoingDDI
     *
     * @return Fax
     */
    protected function setOutgoingDDI(\Core\Domain\Model\DDI\DDIInterface $outgoingDDI = null)
    {
        $this->outgoingDDI = $outgoingDDI;

        return $this;
    }

    /**
     * Get outgoingDDI
     *
     * @return \Core\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI()
    {
        return $this->outgoingDDI;
    }



    // @codeCoverageIgnoreEnd
}
