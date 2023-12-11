<?php

namespace App\Repository;

use App\Entity\FF;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FF>
 *
 * @method FF|null find($id, $lockMode = null, $lockVersion = null)
 * @method FF|null findOneBy(array $criteria, array $orderBy = null)
 * @method FF[]    findAll()
 * @method FF[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FF::class);
    }

//    /**
//     * @return FF[] Returns an array of FF objects
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

//    public function findOneBySomeField($value): ?FF
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
