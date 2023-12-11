<?php

namespace App\Repository;

use App\Entity\Col;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Col>
 *
 * @method Col|null find($id, $lockMode = null, $lockVersion = null)
 * @method Col|null findOneBy(array $criteria, array $orderBy = null)
 * @method Col[]    findAll()
 * @method Col[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Col::class);
    }

//    /**
//     * @return Col[] Returns an array of Col objects
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

//    public function findOneBySomeField($value): ?Col
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
