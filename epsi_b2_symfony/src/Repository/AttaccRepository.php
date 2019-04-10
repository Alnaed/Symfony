<?php

namespace App\Repository;

use App\Entity\Attacc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Attacc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attacc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attacc[]    findAll()
 * @method Attacc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttaccRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Attacc::class);
    }

    // /**
    //  * @return Attacc[] Returns an array of Attacc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Attacc
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
