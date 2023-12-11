<?php

namespace App\Repository;

use App\Entity\Fig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fig>
 *
 * @method Fig|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fig|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fig[]    findAll()
 * @method Fig[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fig::class);
    }

//    /**
//     * @return Fig[] Returns an array of Fig objects
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

//    public function findOneBySomeField($value): ?Fig
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
