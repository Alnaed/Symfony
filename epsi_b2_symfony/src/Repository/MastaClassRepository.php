<?php

namespace App\Repository;

use App\Entity\MastaClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MastaClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method MastaClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method MastaClass[]    findAll()
 * @method MastaClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MastaClassRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MastaClass::class);
    }

    // /**
    //  * @return MastaClass[] Returns an array of MastaClass objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MastaClass
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}