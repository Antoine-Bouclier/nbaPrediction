<?php

namespace App\Repository;

use App\Entity\IndividualReward;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IndividualReward>
 *
 * @method IndividualReward|null find($id, $lockMode = null, $lockVersion = null)
 * @method IndividualReward|null findOneBy(array $criteria, array $orderBy = null)
 * @method IndividualReward[]    findAll()
 * @method IndividualReward[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndividualRewardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IndividualReward::class);
    }

//    /**
//     * @return IndividualReward[] Returns an array of IndividualReward objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IndividualReward
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
