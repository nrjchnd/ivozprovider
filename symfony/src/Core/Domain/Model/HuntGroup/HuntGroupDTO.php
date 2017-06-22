<?php

namespace Core\Domain\Model\HuntGroup;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class HuntGroupDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $description = '';

    /**
     * @var string
     */
    private $strategy;

    /**
     * @var integer
     */
    private $ringAllTimeout;

    /**
     * @var integer
     */
    private $nextUserPosition = '0';

    /**
     * @var string
     */
    private $noAnswerTargetType;

    /**
     * @var string
     */
    private $noAnswerNumberValue;

    /**
     * @var mixed
     */
    private $companyId;

    /**
     * @var mixed
     */
    private $noAnswerLocutionId;

    /**
     * @var mixed
     */
    private $noAnswerExtensionId;

    /**
     * @var mixed
     */
    private $noAnswerVoiceMailUserId;

    /**
     * @var mixed
     */
    private $company;

    /**
     * @var mixed
     */
    private $noAnswerLocution;

    /**
     * @var mixed
     */
    private $noAnswerExtension;

    /**
     * @var mixed
     */
    private $noAnswerVoiceMailUser;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'strategy' => $this->getStrategy(),
            'ringAllTimeout' => $this->getRingAllTimeout(),
            'nextUserPosition' => $this->getNextUserPosition(),
            'noAnswerTargetType' => $this->getNoAnswerTargetType(),
            'noAnswerNumberValue' => $this->getNoAnswerNumberValue(),
            'companyId' => $this->getCompanyId(),
            'noAnswerLocutionId' => $this->getNoAnswerLocutionId(),
            'noAnswerExtensionId' => $this->getNoAnswerExtensionId(),
            'noAnswerVoiceMailUserId' => $this->getNoAnswerVoiceMailUserId()
        ];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setName(isset($data['name']) ? $data['name'] : null)
            ->setDescription(isset($data['description']) ? $data['description'] : null)
            ->setStrategy(isset($data['strategy']) ? $data['strategy'] : null)
            ->setRingAllTimeout(isset($data['ringAllTimeout']) ? $data['ringAllTimeout'] : null)
            ->setNextUserPosition(isset($data['nextUserPosition']) ? $data['nextUserPosition'] : null)
            ->setNoAnswerTargetType(isset($data['noAnswerTargetType']) ? $data['noAnswerTargetType'] : null)
            ->setNoAnswerNumberValue(isset($data['noAnswerNumberValue']) ? $data['noAnswerNumberValue'] : null)
            ->setCompanyId(isset($data['companyId']) ? $data['companyId'] : null)
            ->setNoAnswerLocutionId(isset($data['noAnswerLocutionId']) ? $data['noAnswerLocutionId'] : null)
            ->setNoAnswerExtensionId(isset($data['noAnswerExtensionId']) ? $data['noAnswerExtensionId'] : null)
            ->setNoAnswerVoiceMailUserId(isset($data['noAnswerVoiceMailUserId']) ? $data['noAnswerVoiceMailUserId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->company = $transformer->transform('Core\\Domain\\Model\\Company\\CompanyInterface', $this->getCompanyId());
        $this->noAnswerLocution = $transformer->transform('Core\\Domain\\Model\\Locution\\LocutionInterface', $this->getNoAnswerLocutionId());
        $this->noAnswerExtension = $transformer->transform('Core\\Domain\\Model\\Extension\\ExtensionInterface', $this->getNoAnswerExtensionId());
        $this->noAnswerVoiceMailUser = $transformer->transform('Core\\Domain\\Model\\User\\UserInterface', $this->getNoAnswerVoiceMailUserId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return HuntGroupDTO
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
     * @param string $name
     *
     * @return HuntGroupDTO
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
     * @param string $description
     *
     * @return HuntGroupDTO
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $strategy
     *
     * @return HuntGroupDTO
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @param integer $ringAllTimeout
     *
     * @return HuntGroupDTO
     */
    public function setRingAllTimeout($ringAllTimeout)
    {
        $this->ringAllTimeout = $ringAllTimeout;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRingAllTimeout()
    {
        return $this->ringAllTimeout;
    }

    /**
     * @param integer $nextUserPosition
     *
     * @return HuntGroupDTO
     */
    public function setNextUserPosition($nextUserPosition = null)
    {
        $this->nextUserPosition = $nextUserPosition;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNextUserPosition()
    {
        return $this->nextUserPosition;
    }

    /**
     * @param string $noAnswerTargetType
     *
     * @return HuntGroupDTO
     */
    public function setNoAnswerTargetType($noAnswerTargetType = null)
    {
        $this->noAnswerTargetType = $noAnswerTargetType;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoAnswerTargetType()
    {
        return $this->noAnswerTargetType;
    }

    /**
     * @param string $noAnswerNumberValue
     *
     * @return HuntGroupDTO
     */
    public function setNoAnswerNumberValue($noAnswerNumberValue = null)
    {
        $this->noAnswerNumberValue = $noAnswerNumberValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoAnswerNumberValue()
    {
        return $this->noAnswerNumberValue;
    }

    /**
     * @param integer $companyId
     *
     * @return HuntGroupDTO
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
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param integer $noAnswerLocutionId
     *
     * @return HuntGroupDTO
     */
    public function setNoAnswerLocutionId($noAnswerLocutionId)
    {
        $this->noAnswerLocutionId = $noAnswerLocutionId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNoAnswerLocutionId()
    {
        return $this->noAnswerLocutionId;
    }

    /**
     * @return \Core\Domain\Model\Locution\LocutionInterface
     */
    public function getNoAnswerLocution()
    {
        return $this->noAnswerLocution;
    }

    /**
     * @param integer $noAnswerExtensionId
     *
     * @return HuntGroupDTO
     */
    public function setNoAnswerExtensionId($noAnswerExtensionId)
    {
        $this->noAnswerExtensionId = $noAnswerExtensionId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNoAnswerExtensionId()
    {
        return $this->noAnswerExtensionId;
    }

    /**
     * @return \Core\Domain\Model\Extension\ExtensionInterface
     */
    public function getNoAnswerExtension()
    {
        return $this->noAnswerExtension;
    }

    /**
     * @param integer $noAnswerVoiceMailUserId
     *
     * @return HuntGroupDTO
     */
    public function setNoAnswerVoiceMailUserId($noAnswerVoiceMailUserId)
    {
        $this->noAnswerVoiceMailUserId = $noAnswerVoiceMailUserId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNoAnswerVoiceMailUserId()
    {
        return $this->noAnswerVoiceMailUserId;
    }

    /**
     * @return \Core\Domain\Model\User\UserInterface
     */
    public function getNoAnswerVoiceMailUser()
    {
        return $this->noAnswerVoiceMailUser;
    }
}
