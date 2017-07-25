<?php
namespace Ivoz\Domain\Service\CompanyAdmin;

use Core\Domain\Service\LifecycleEventHandlerInterface;
use Core\Domain\Model\EntityInterface;
use Doctrine\ORM\EntityManagerInterface;
use Ivoz\Domain\Model\CompanyAdmin\CompanyAdmin;
use Ivoz\Domain\Model\CompanyAdmin\CompanyAdminRepository;

/**
 * Class CheckValidity
 * @package Ivoz\Domain\Service\CompanyAdmin
 * @lifecycle company_admin.pre_persist
 */
class CheckValidity implements LifecycleEventHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var CompanyAdminRepository
     *
     */
    protected $companyAdminRepository;

    public function __construct(
        EntityManagerInterface $em,
        CompanyAdminRepository $companyAdminRepository
    ) {
        $this->em = $em;
        $this->companyAdminRepository = $companyAdminRepository;
    }

    /**
     * @param CompanyAdmin $entity
     * @throws \Exception
     */
    public function execute(EntityInterface $entity)
    {
        $isNew = $this->em->contains($entity);
        if (!$isNew) {
            return;
        }

        $company = $entity->getCompany();
        $user = $this->companyAdminRepository->findOneBy([
            'username' => $entity->getUsername(),
            //@todo This was wrong
            //'brandId' => $entity->getCompany()->getBrandId()
            'company' => $company->getId()
        ]);

        if (!is_null($user)) {
            $error_msg = sprintf (
                "Username '%s' is already used in company '%s'",
                $entity->getUsername(),
                $company->getName()
            );
            throw new \Exception($error_msg);
        }
    }
}