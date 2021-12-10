<?php

namespace App\Repository;

use App\Entity\ProductName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductName|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductName|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductName[]    findAll()
 * @method ProductName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductName::class);
    }

    // /**
    //  * @return ProductName[] Returns an array of ProductName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductName
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
