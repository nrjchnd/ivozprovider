<?php

namespace Core\Domain\Model\CallForwardSetting;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class CallForwardSettingDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $callTypeFilter;

    /**
     * @var string
     */
    private $callForwardType;

    /**
     * @var string
     */
    private $targetType;

    /**
     * @var string
     */
    private $numberValue;

    /**
     * @var integer
     */
    private $noAnswerTimeout = '10';

    /**
     * @var mixed
     */
    private $userId;

    /**
     * @var mixed
     */
    private $extensionId;

    /**
     * @var mixed
     */
    private $voiceMailUserId;

    /**
     * @var mixed
     */
    private $user;

    /**
     * @var mixed
     */
    private $extension;

    /**
     * @var mixed
     */
    private $voiceMailUser;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'callTypeFilter' => $this->getCallTypeFilter(),
            'callForwardType' => $this->getCallForwardType(),
            'targetType' => $this->getTargetType(),
            'numberValue' => $this->getNumberValue(),
            'noAnswerTimeout' => $this->getNoAnswerTimeout(),
            'userId' => $this->getUserId(),
            'extensionId' => $this->getExtensionId(),
            'voiceMailUserId' => $this->getVoiceMailUserId()
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
            ->setCallTypeFilter(isset($data['callTypeFilter']) ? $data['callTypeFilter'] : null)
            ->setCallForwardType(isset($data['callForwardType']) ? $data['callForwardType'] : null)
            ->setTargetType(isset($data['targetType']) ? $data['targetType'] : null)
            ->setNumberValue(isset($data['numberValue']) ? $data['numberValue'] : null)
            ->setNoAnswerTimeout(isset($data['noAnswerTimeout']) ? $data['noAnswerTimeout'] : null)
            ->setUserId(isset($data['userId']) ? $data['userId'] : null)
            ->setExtensionId(isset($data['extensionId']) ? $data['extensionId'] : null)
            ->setVoiceMailUserId(isset($data['voiceMailUserId']) ? $data['voiceMailUserId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->user = $transformer->transform('Core\\Domain\\Model\\User\\UserInterface', $this->getUserId());
        $this->extension = $transformer->transform('Core\\Domain\\Model\\Extension\\ExtensionInterface', $this->getExtensionId());
        $this->voiceMailUser = $transformer->transform('Core\\Domain\\Model\\User\\UserInterface', $this->getVoiceMailUserId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return CallForwardSettingDTO
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
     * @param string $callTypeFilter
     *
     * @return CallForwardSettingDTO
     */
    public function setCallTypeFilter($callTypeFilter)
    {
        $this->callTypeFilter = $callTypeFilter;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallTypeFilter()
    {
        return $this->callTypeFilter;
    }

    /**
     * @param string $callForwardType
     *
     * @return CallForwardSettingDTO
     */
    public function setCallForwardType($callForwardType)
    {
        $this->callForwardType = $callForwardType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallForwardType()
    {
        return $this->callForwardType;
    }

    /**
     * @param string $targetType
     *
     * @return CallForwardSettingDTO
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param string $numberValue
     *
     * @return CallForwardSettingDTO
     */
    public function setNumberValue($numberValue = null)
    {
        $this->numberValue = $numberValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * @param integer $noAnswerTimeout
     *
     * @return CallForwardSettingDTO
     */
    public function setNoAnswerTimeout($noAnswerTimeout)
    {
        $this->noAnswerTimeout = $noAnswerTimeout;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNoAnswerTimeout()
    {
        return $this->noAnswerTimeout;
    }

    /**
     * @param integer $userId
     *
     * @return CallForwardSettingDTO
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return \Core\Domain\Model\User\UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param integer $extensionId
     *
     * @return CallForwardSettingDTO
     */
    public function setExtensionId($extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * @return \Core\Domain\Model\Extension\ExtensionInterface
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param integer $voiceMailUserId
     *
     * @return CallForwardSettingDTO
     */
    public function setVoiceMailUserId($voiceMailUserId)
    {
        $this->voiceMailUserId = $voiceMailUserId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getVoiceMailUserId()
    {
        return $this->voiceMailUserId;
    }

    /**
     * @return \Core\Domain\Model\User\UserInterface
     */
    public function getVoiceMailUser()
    {
        return $this->voiceMailUser;
    }
}
