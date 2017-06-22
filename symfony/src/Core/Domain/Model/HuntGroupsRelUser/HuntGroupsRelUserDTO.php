<?php

namespace Core\Domain\Model\HuntGroupsRelUser;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class HuntGroupsRelUserDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $timeoutTime;

    /**
     * @var integer
     */
    private $priority;

    /**
     * @var mixed
     */
    private $huntGroupId;

    /**
     * @var mixed
     */
    private $userId;

    /**
     * @var mixed
     */
    private $huntGroup;

    /**
     * @var mixed
     */
    private $user;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'timeoutTime' => $this->getTimeoutTime(),
            'priority' => $this->getPriority(),
            'huntGroupId' => $this->getHuntGroupId(),
            'userId' => $this->getUserId()
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
            ->setTimeoutTime(isset($data['timeoutTime']) ? $data['timeoutTime'] : null)
            ->setPriority(isset($data['priority']) ? $data['priority'] : null)
            ->setHuntGroupId(isset($data['huntGroupId']) ? $data['huntGroupId'] : null)
            ->setUserId(isset($data['userId']) ? $data['userId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->huntGroup = $transformer->transform('Core\\Domain\\Model\\HuntGroup\\HuntGroupInterface', $this->getHuntGroupId());
        $this->user = $transformer->transform('Core\\Domain\\Model\\User\\UserInterface', $this->getUserId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return HuntGroupsRelUserDTO
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
     * @param integer $timeoutTime
     *
     * @return HuntGroupsRelUserDTO
     */
    public function setTimeoutTime($timeoutTime = null)
    {
        $this->timeoutTime = $timeoutTime;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTimeoutTime()
    {
        return $this->timeoutTime;
    }

    /**
     * @param integer $priority
     *
     * @return HuntGroupsRelUserDTO
     */
    public function setPriority($priority = null)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param integer $huntGroupId
     *
     * @return HuntGroupsRelUserDTO
     */
    public function setHuntGroupId($huntGroupId)
    {
        $this->huntGroupId = $huntGroupId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getHuntGroupId()
    {
        return $this->huntGroupId;
    }

    /**
     * @return \Core\Domain\Model\HuntGroup\HuntGroupInterface
     */
    public function getHuntGroup()
    {
        return $this->huntGroup;
    }

    /**
     * @param integer $userId
     *
     * @return HuntGroupsRelUserDTO
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
}
