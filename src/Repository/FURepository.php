<?php

namespace App\Repository;

use App\Entity\FU;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FU>
 *
 * @method FU|null find($id, $lockMode = null, $lockVersion = null)
 * @method FU|null findOneBy(array $criteria, array $orderBy = null)
 * @method FU[]    findAll()
 * @method FU[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FURepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FU::class);
    }

//    /**
//     * @return FU[] Returns an array of FU objects
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

//    public function findOneBySomeField($value): ?FU
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
