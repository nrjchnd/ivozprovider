<?php

namespace Kam\Domain\Model\TrunksDialplan;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class TrunksDialplanDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $dpid;

    /**
     * @var integer
     */
    private $pr;

    /**
     * @column match_op
     * @var integer
     */
    private $matchOp;

    /**
     * @column match_exp
     * @var string
     */
    private $matchExp;

    /**
     * @column match_len
     * @var integer
     */
    private $matchLen;

    /**
     * @column subst_exp
     * @var string
     */
    private $substExp;

    /**
     * @column repl_exp
     * @var string
     */
    private $replExp;

    /**
     * @var string
     */
    private $attrs;

    /**
     * @var mixed
     */
    private $transformationRulesetGroupsTrunkId;

    /**
     * @var mixed
     */
    private $transformationRulesetGroupsTrunk;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'dpid' => $this->getDpid(),
            'pr' => $this->getPr(),
            'matchOp' => $this->getMatchOp(),
            'matchExp' => $this->getMatchExp(),
            'matchLen' => $this->getMatchLen(),
            'substExp' => $this->getSubstExp(),
            'replExp' => $this->getReplExp(),
            'attrs' => $this->getAttrs(),
            'transformationRulesetGroupsTrunkId' => $this->getTransformationRulesetGroupsTrunkId()
        ];
    }

    /**
     * @param array $data
     * @return self
     * @deprecated
     *
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setDpid(isset($data['dpid']) ? $data['dpid'] : null)
            ->setPr(isset($data['pr']) ? $data['pr'] : null)
            ->setMatchOp(isset($data['matchOp']) ? $data['matchOp'] : null)
            ->setMatchExp(isset($data['matchExp']) ? $data['matchExp'] : null)
            ->setMatchLen(isset($data['matchLen']) ? $data['matchLen'] : null)
            ->setSubstExp(isset($data['substExp']) ? $data['substExp'] : null)
            ->setReplExp(isset($data['replExp']) ? $data['replExp'] : null)
            ->setAttrs(isset($data['attrs']) ? $data['attrs'] : null)
            ->setTransformationRulesetGroupsTrunkId(isset($data['transformationRulesetGroupsTrunkId']) ? $data['transformationRulesetGroupsTrunkId'] : null);
    }
     */

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->transformationRulesetGroupsTrunk = $transformer->transform('Core\\Domain\\Model\\TransformationRulesetGroupsTrunk\\TransformationRulesetGroupsTrunk', $this->getTransformationRulesetGroupsTrunkId());
    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return TrunksDialplanDTO
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
     * @param integer $dpid
     *
     * @return TrunksDialplanDTO
     */
    public function setDpid($dpid)
    {
        $this->dpid = $dpid;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDpid()
    {
        return $this->dpid;
    }

    /**
     * @param integer $pr
     *
     * @return TrunksDialplanDTO
     */
    public function setPr($pr)
    {
        $this->pr = $pr;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPr()
    {
        return $this->pr;
    }

    /**
     * @param integer $matchOp
     *
     * @return TrunksDialplanDTO
     */
    public function setMatchOp($matchOp)
    {
        $this->matchOp = $matchOp;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMatchOp()
    {
        return $this->matchOp;
    }

    /**
     * @param string $matchExp
     *
     * @return TrunksDialplanDTO
     */
    public function setMatchExp($matchExp)
    {
        $this->matchExp = $matchExp;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchExp()
    {
        return $this->matchExp;
    }

    /**
     * @param integer $matchLen
     *
     * @return TrunksDialplanDTO
     */
    public function setMatchLen($matchLen)
    {
        $this->matchLen = $matchLen;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMatchLen()
    {
        return $this->matchLen;
    }

    /**
     * @param string $substExp
     *
     * @return TrunksDialplanDTO
     */
    public function setSubstExp($substExp)
    {
        $this->substExp = $substExp;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubstExp()
    {
        return $this->substExp;
    }

    /**
     * @param string $replExp
     *
     * @return TrunksDialplanDTO
     */
    public function setReplExp($replExp)
    {
        $this->replExp = $replExp;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplExp()
    {
        return $this->replExp;
    }

    /**
     * @param string $attrs
     *
     * @return TrunksDialplanDTO
     */
    public function setAttrs($attrs)
    {
        $this->attrs = $attrs;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttrs()
    {
        return $this->attrs;
    }

    /**
     * @param integer $transformationRulesetGroupsTrunkId
     *
     * @return TrunksDialplanDTO
     */
    public function setTransformationRulesetGroupsTrunkId($transformationRulesetGroupsTrunkId)
    {
        $this->transformationRulesetGroupsTrunkId = $transformationRulesetGroupsTrunkId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTransformationRulesetGroupsTrunkId()
    {
        return $this->transformationRulesetGroupsTrunkId;
    }

    /**
     * @return \Core\Domain\Model\TransformationRulesetGroupsTrunk\TransformationRulesetGroupsTrunk
     */
    public function getTransformationRulesetGroupsTrunk()
    {
        return $this->transformationRulesetGroupsTrunk;
    }
}

