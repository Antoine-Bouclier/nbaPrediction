<?php

namespace App\Repository;

use App\Entity\WestRanking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WestRanking>
 *
 * @method WestRanking|null find($id, $lockMode = null, $lockVersion = null)
 * @method WestRanking|null findOneBy(array $criteria, array $orderBy = null)
 * @method WestRanking[]    findAll()
 * @method WestRanking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WestRankingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WestRanking::class);
    }

//    /**
//     * @return WestRanking[] Returns an array of WestRanking objects
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

//    public function findOneBySomeField($value): ?WestRanking
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
