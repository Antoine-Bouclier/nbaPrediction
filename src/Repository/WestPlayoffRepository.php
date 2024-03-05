<?php

namespace App\Repository;

use App\Entity\WestPlayoff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WestPlayoff>
 *
 * @method WestPlayoff|null find($id, $lockMode = null, $lockVersion = null)
 * @method WestPlayoff|null findOneBy(array $criteria, array $orderBy = null)
 * @method WestPlayoff[]    findAll()
 * @method WestPlayoff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WestPlayoffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WestPlayoff::class);
    }

//    /**
//     * @return WestPlayoff[] Returns an array of WestPlayoff objects
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

//    public function findOneBySomeField($value): ?WestPlayoff
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
