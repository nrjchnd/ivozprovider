<?php
namespace Ivoz\Domain\Model\OutgoingDDIRule;

use Assert\Assertion;
use Core\Application\DataTransferObjectInterface;

/**
 * OutgoingDDIRuleAbstract
 */
abstract class OutgoingDDIRuleAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @comment enum:keep|force
     * @var string
     */
    protected $defaultAction;

    /**
     * @var \Ivoz\Domain\Model\Company\CompanyInterface
     */
    protected $company;

    /**
     * @var \Ivoz\Domain\Model\DDI\DDIInterface
     */
    protected $forcedDDI;


    /**
     * Changelog tracking purpose
     * @var array
     */
    protected $_initialValues = [];

    /**
     * Constructor
     */
    public function __construct($name, $defaultAction)
    {
        $this->setName($name);
        $this->setDefaultAction($defaultAction);
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
     * @return OutgoingDDIRuleDTO
     */
    public static function createDTO()
    {
        return new OutgoingDDIRuleDTO();
    }

    /**
     * Factory method
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public static function fromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto OutgoingDDIRuleDTO
         */
        Assertion::isInstanceOf($dto, OutgoingDDIRuleDTO::class);

        $self = new static(
            $dto->getName(),
            $dto->getDefaultAction());

        return $self
            ->setCompany($dto->getCompany())
            ->setForcedDDI($dto->getForcedDDI())
        ;
    }

    /**
     * @param DataTransferObjectInterface $dto
     * @return self
     */
    public function updateFromDTO(DataTransferObjectInterface $dto)
    {
        /**
         * @var $dto OutgoingDDIRuleDTO
         */
        Assertion::isInstanceOf($dto, OutgoingDDIRuleDTO::class);

        $this
            ->setName($dto->getName())
            ->setDefaultAction($dto->getDefaultAction())
            ->setCompany($dto->getCompany())
            ->setForcedDDI($dto->getForcedDDI());


        return $this;
    }

    /**
     * @return OutgoingDDIRuleDTO
     */
    public function toDTO()
    {
        return self::createDTO()
            ->setName($this->getName())
            ->setDefaultAction($this->getDefaultAction())
            ->setCompanyId($this->getCompany() ? $this->getCompany()->getId() : null)
            ->setForcedDDIId($this->getForcedDDI() ? $this->getForcedDDI()->getId() : null);
    }

    /**
     * @return array
     */
    protected function __toArray()
    {
        return [
            'name' => $this->getName(),
            'defaultAction' => $this->getDefaultAction(),
            'companyId' => $this->getCompany() ? $this->getCompany()->getId() : null,
            'forcedDDIId' => $this->getForcedDDI() ? $this->getForcedDDI()->getId() : null
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
     * Set defaultAction
     *
     * @param string $defaultAction
     *
     * @return self
     */
    public function setDefaultAction($defaultAction)
    {
        Assertion::notNull($defaultAction);
        Assertion::maxLength($defaultAction, 10);
        Assertion::choice($defaultAction, array (
          0 => 'keep',
          1 => 'force',
        ));

        $this->defaultAction = $defaultAction;

        return $this;
    }

    /**
     * Get defaultAction
     *
     * @return string
     */
    public function getDefaultAction()
    {
        return $this->defaultAction;
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
     * Set forcedDDI
     *
     * @param \Ivoz\Domain\Model\DDI\DDIInterface $forcedDDI
     *
     * @return self
     */
    public function setForcedDDI(\Ivoz\Domain\Model\DDI\DDIInterface $forcedDDI = null)
    {
        $this->forcedDDI = $forcedDDI;

        return $this;
    }

    /**
     * Get forcedDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getForcedDDI()
    {
        return $this->forcedDDI;
    }



    // @codeCoverageIgnoreEnd
}

