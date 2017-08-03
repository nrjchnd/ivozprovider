<?php
namespace Ivoz\Domain\Service\CallACLPattern;

use Core\Domain\Service\EntityPersisterInterface;
use Core\Domain\Service\LifecycleEventHandlerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Core\Domain\Model\EntityInterface;
use Ivoz\Domain\Model\Brand\Brand;
use Ivoz\Domain\Model\CallACLPattern\CallACLPattern;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\GenericCallACLPattern\GenericCallACLPattern;

/**
 * Class PropagateBrandGenericCallACLPatterns
 * @package Ivoz\Domain\Service\CallACLPattern
 * @lifecycle company.pre_persist
 */
class PropagateBrandGenericCallACLPatterns implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var EntityPersisterInterface
     */
    protected $entityPersister;

    public function __construct(
        EntityManagerInterface $em,
        EntityPersisterInterface $entityPersister
    ) {
        $this->em = $em;
        $this->entityPersister = $entityPersister;
    }

    /**
     * @param Company $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $alreadyPersisted = $this->em->contains($entity);
        if ($alreadyPersisted) {
            return;
        }

        $companyDto = $entity->toDTO();
        /**
         * @var Brand $brand
         */
        $brand = $entity->getBrand();
        if (is_null($brand)) {
            throw new \Exception(_("Brand is not set"), 60000);
        }

        /**
         * We can avoid one query here using the repository directly
         */
        $genericCallACLPatterns = $brand->getGenericCallACLPatterns();
        $callACLPatterns = array();

        /**
         * @var GenericCallACLPattern $genericCallACLPattern
         */
        foreach ($genericCallACLPatterns as $genericCallACLPattern) {

            $callACLPatternDto = CallACLPattern::createDTO();
            $callACLPatternDto
                /* @todo ensure that this works as expected, this is not the real company id
                 * because is not persisted yet.
                 */
                ->setCompanyId($companyDto->getId())
                ->setName($genericCallACLPattern->getName())
                ->setRegExp($genericCallACLPattern->getRegExp());

            $callACLPatterns[] = $callACLPatternDto;
        }

        if (!empty($callACLPatterns)) {
            // @todo check whether cascade: ['persist']/ other is necessary
            $companyDto->setCallACLPatterns($callACLPatterns);
            $this->entityPersister->persist($companyDto, $entity);
        }
    }
}