<?php

namespace App\Repository;

use App\Entity\CaF;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CaF>
 *
 * @method CaF|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaF|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaF[]    findAll()
 * @method CaF[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaFRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaF::class);
    }

//    /**
//     * @return CaF[] Returns an array of CaF objects
//     */

//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CaF
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
