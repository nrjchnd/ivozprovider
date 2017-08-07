<?php
namespace Ivoz\Domain\Model\CallACL;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class CallACLDTO implements DataTransferObjectInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $defaultPolicy;

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
    private $company;

    /**
     * @var array|null
     */
    private $relPatterns = null;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'name' => $this->getName(),
            'defaultPolicy' => $this->getDefaultPolicy(),
            'id' => $this->getId(),
            'companyId' => $this->getCompanyId(),
            'relPatternsId' => $this->getRelPatternsId()
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->company = $transformer->transform('Ivoz\\Domain\\Model\\Company\\Company', $this->getCompanyId());
        $items = $this->getRelPatterns();
        $this->relPatterns = [];
        foreach ($items as $item) {
            $this->relPatterns[] = $transformer->transform(
                'Ivoz\\Domain\\Model\\CallACLRelPattern\\CallACLRelPattern',
                $item
            );
        }

    }

    /**
     * {@inheritDoc}
     */
    public function transformCollections(CollectionTransformerInterface $transformer)
    {
        $this->relPatterns = $transformer->transform(
            'Ivoz\\Domain\\Model\\CallACLRelPattern\\CallACLRelPattern',
            $this->relPatterns
        );
    }

    /**
     * @param string $name
     *
     * @return CallACLDTO
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
     * @param string $defaultPolicy
     *
     * @return CallACLDTO
     */
    public function setDefaultPolicy($defaultPolicy)
    {
        $this->defaultPolicy = $defaultPolicy;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPolicy()
    {
        return $this->defaultPolicy;
    }

    /**
     * @param integer $id
     *
     * @return CallACLDTO
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
     * @return CallACLDTO
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
     * @param array $relPatterns
     *
     * @return CallACLDTO
     */
    public function setRelPatterns($relPatterns)
    {
        $this->relPatterns = $relPatterns;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelPatterns()
    {
        return $this->relPatterns;
    }
}

