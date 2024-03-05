<?php

namespace App\Repository;

use App\Entity\EstPlayoff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EstPlayoff>
 *
 * @method EstPlayoff|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstPlayoff|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstPlayoff[]    findAll()
 * @method EstPlayoff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstPlayoffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstPlayoff::class);
    }

//    /**
//     * @return EstPlayoff[] Returns an array of EstPlayoff objects
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

//    public function findOneBySomeField($value): ?EstPlayoff
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
