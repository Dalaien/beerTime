<?php

namespace App\Repository;

use App\Entity\Refence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Refence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Refence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Refence[]    findAll()
 * @method Refence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Refence::class);
    }

    // /**
    //  * @return Refence[] Returns an array of Refence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Refence
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
