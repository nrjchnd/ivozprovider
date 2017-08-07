<?php
namespace Ivoz\Domain\Model\OutgoingDDIRule;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class OutgoingDDIRuleDTO implements DataTransferObjectInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $defaultAction;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var mixed
     */
    private $companyId;

    /**
     * @var mixed
     */
    private $forcedDDIId;

    /**
     * @var mixed
     */
    private $company;

    /**
     * @var mixed
     */
    private $forcedDDI;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'name' => $this->getName(),
            'defaultAction' => $this->getDefaultAction(),
            'id' => $this->getId(),
            'companyId' => $this->getCompanyId(),
            'forcedDDIId' => $this->getForcedDDIId()
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->company = $transformer->transform('Ivoz\\Domain\\Model\\Company\\Company', $this->getCompanyId());
        $this->forcedDDI = $transformer->transform('Ivoz\\Domain\\Model\\DDI\\DDI', $this->getForcedDDIId());
    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param string $name
     *
     * @return OutgoingDDIRuleDTO
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $defaultAction
     *
     * @return OutgoingDDIRuleDTO
     */
    public function setDefaultAction($defaultAction)
    {
        $this->defaultAction = $defaultAction;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAction()
    {
        return $this->defaultAction;
    }

    /**
     * @param integer $id
     *
     * @return OutgoingDDIRuleDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $companyId
     *
     * @return OutgoingDDIRuleDTO
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @return \Ivoz\Domain\Model\Company\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param integer $forcedDDIId
     *
     * @return OutgoingDDIRuleDTO
     */
    public function setForcedDDIId($forcedDDIId)
    {
        $this->forcedDDIId = $forcedDDIId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getForcedDDIId()
    {
        return $this->forcedDDIId;
    }

    /**
     * @return \Ivoz\Domain\Model\DDI\DDI
     */
    public function getForcedDDI()
    {
        return $this->forcedDDI;
    }
}

