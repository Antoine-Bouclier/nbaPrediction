<?php

namespace App\Repository;

use App\Entity\WestFranchise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WestFranchise>
 *
 * @method WestFranchise|null find($id, $lockMode = null, $lockVersion = null)
 * @method WestFranchise|null findOneBy(array $criteria, array $orderBy = null)
 * @method WestFranchise[]    findAll()
 * @method WestFranchise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WestFranchiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WestFranchise::class);
    }

//    /**
//     * @return WestFranchise[] Returns an array of WestFranchise objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WestFranchise
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
