<?php

namespace App\Repository;

use App\Entity\EstFranchise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EstFranchise>
 *
 * @method EstFranchise|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstFranchise|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstFranchise[]    findAll()
 * @method EstFranchise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstFranchiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstFranchise::class);
    }

//    /**
//     * @return EstFranchise[] Returns an array of EstFranchise objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EstFranchise
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
