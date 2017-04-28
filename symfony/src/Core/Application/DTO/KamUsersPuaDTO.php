<?php

namespace Core\Application\DTO;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class KamUsersPuaDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @column pres_uri
     * @var string
     */
    public $presUri;

    /**
     * @column pres_id
     * @var string
     */
    public $presId;

    /**
     * @var integer
     */
    public $event;

    /**
     * @var integer
     */
    public $expires;

    /**
     * @column desired_expires
     * @var integer
     */
    public $desiredExpires;

    /**
     * @var integer
     */
    public $flag;

    /**
     * @var string
     */
    public $etag;

    /**
     * @column tuple_id
     * @var string
     */
    public $tupleId;

    /**
     * @column watcher_uri
     * @var string
     */
    public $watcherUri;

    /**
     * @column call_id
     * @var string
     */
    public $callId;

    /**
     * @column to_tag
     * @var string
     */
    public $toTag;

    /**
     * @column from_tag
     * @var string
     */
    public $fromTag;

    /**
     * @var integer
     */
    public $cseq;

    /**
     * @column record_route
     * @var string
     */
    public $recordRoute;

    /**
     * @var string
     */
    public $contact;

    /**
     * @column remote_contact
     * @var string
     */
    public $remoteContact;

    /**
     * @var integer
     */
    public $version;

    /**
     * @column extra_headers
     * @var string
     */
    public $extraHeaders;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'presUri' => $this->getPresUri(),
            'presId' => $this->getPresId(),
            'event' => $this->getEvent(),
            'expires' => $this->getExpires(),
            'desiredExpires' => $this->getDesiredExpires(),
            'flag' => $this->getFlag(),
            'etag' => $this->getEtag(),
            'tupleId' => $this->getTupleId(),
            'watcherUri' => $this->getWatcherUri(),
            'callId' => $this->getCallId(),
            'toTag' => $this->getToTag(),
            'fromTag' => $this->getFromTag(),
            'cseq' => $this->getCseq(),
            'recordRoute' => $this->getRecordRoute(),
            'contact' => $this->getContact(),
            'remoteContact' => $this->getRemoteContact(),
            'version' => $this->getVersion(),
            'extraHeaders' => $this->getExtraHeaders()
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
            ->setPresUri(isset($data['presUri']) ? $data['presUri'] : null)
            ->setPresId(isset($data['presId']) ? $data['presId'] : null)
            ->setEvent(isset($data['event']) ? $data['event'] : null)
            ->setExpires(isset($data['expires']) ? $data['expires'] : null)
            ->setDesiredExpires(isset($data['desiredExpires']) ? $data['desiredExpires'] : null)
            ->setFlag(isset($data['flag']) ? $data['flag'] : null)
            ->setEtag(isset($data['etag']) ? $data['etag'] : null)
            ->setTupleId(isset($data['tupleId']) ? $data['tupleId'] : null)
            ->setWatcherUri(isset($data['watcherUri']) ? $data['watcherUri'] : null)
            ->setCallId(isset($data['callId']) ? $data['callId'] : null)
            ->setToTag(isset($data['toTag']) ? $data['toTag'] : null)
            ->setFromTag(isset($data['fromTag']) ? $data['fromTag'] : null)
            ->setCseq(isset($data['cseq']) ? $data['cseq'] : null)
            ->setRecordRoute(isset($data['recordRoute']) ? $data['recordRoute'] : null)
            ->setContact(isset($data['contact']) ? $data['contact'] : null)
            ->setRemoteContact(isset($data['remoteContact']) ? $data['remoteContact'] : null)
            ->setVersion(isset($data['version']) ? $data['version'] : null)
            ->setExtraHeaders(isset($data['extraHeaders']) ? $data['extraHeaders'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {

    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return KamUsersPuaDTO
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
     * @param string $presUri
     *
     * @return KamUsersPuaDTO
     */
    public function setPresUri($presUri)
    {
        $this->presUri = $presUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPresUri()
    {
        return $this->presUri;
    }

    /**
     * @param string $presId
     *
     * @return KamUsersPuaDTO
     */
    public function setPresId($presId)
    {
        $this->presId = $presId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPresId()
    {
        return $this->presId;
    }

    /**
     * @param integer $event
     *
     * @return KamUsersPuaDTO
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return integer
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param integer $expires
     *
     * @return KamUsersPuaDTO
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return integer
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param integer $desiredExpires
     *
     * @return KamUsersPuaDTO
     */
    public function setDesiredExpires($desiredExpires)
    {
        $this->desiredExpires = $desiredExpires;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDesiredExpires()
    {
        return $this->desiredExpires;
    }

    /**
     * @param integer $flag
     *
     * @return KamUsersPuaDTO
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param string $etag
     *
     * @return KamUsersPuaDTO
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param string $tupleId
     *
     * @return KamUsersPuaDTO
     */
    public function setTupleId($tupleId = null)
    {
        $this->tupleId = $tupleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTupleId()
    {
        return $this->tupleId;
    }

    /**
     * @param string $watcherUri
     *
     * @return KamUsersPuaDTO
     */
    public function setWatcherUri($watcherUri)
    {
        $this->watcherUri = $watcherUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getWatcherUri()
    {
        return $this->watcherUri;
    }

    /**
     * @param string $callId
     *
     * @return KamUsersPuaDTO
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * @param string $toTag
     *
     * @return KamUsersPuaDTO
     */
    public function setToTag($toTag)
    {
        $this->toTag = $toTag;

        return $this;
    }

    /**
     * @return string
     */
    public function getToTag()
    {
        return $this->toTag;
    }

    /**
     * @param string $fromTag
     *
     * @return KamUsersPuaDTO
     */
    public function setFromTag($fromTag)
    {
        $this->fromTag = $fromTag;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromTag()
    {
        return $this->fromTag;
    }

    /**
     * @param integer $cseq
     *
     * @return KamUsersPuaDTO
     */
    public function setCseq($cseq)
    {
        $this->cseq = $cseq;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCseq()
    {
        return $this->cseq;
    }

    /**
     * @param string $recordRoute
     *
     * @return KamUsersPuaDTO
     */
    public function setRecordRoute($recordRoute = null)
    {
        $this->recordRoute = $recordRoute;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordRoute()
    {
        return $this->recordRoute;
    }

    /**
     * @param string $contact
     *
     * @return KamUsersPuaDTO
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $remoteContact
     *
     * @return KamUsersPuaDTO
     */
    public function setRemoteContact($remoteContact)
    {
        $this->remoteContact = $remoteContact;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteContact()
    {
        return $this->remoteContact;
    }

    /**
     * @param integer $version
     *
     * @return KamUsersPuaDTO
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $extraHeaders
     *
     * @return KamUsersPuaDTO
     */
    public function setExtraHeaders($extraHeaders)
    {
        $this->extraHeaders = $extraHeaders;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraHeaders()
    {
        return $this->extraHeaders;
    }
}

