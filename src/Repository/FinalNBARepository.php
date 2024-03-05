<?php

namespace App\Repository;

use App\Entity\FinalNBA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FinalNBA>
 *
 * @method FinalNBA|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinalNBA|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinalNBA[]    findAll()
 * @method FinalNBA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinalNBARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FinalNBA::class);
    }

//    /**
//     * @return FinalNBA[] Returns an array of FinalNBA objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FinalNBA
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
