<?php

namespace App\Repository;

use App\Entity\Techonologie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Techonologie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Techonologie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Techonologie[]    findAll()
 * @method Techonologie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechonologieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Techonologie::class);
    }

    // /**
    //  * @return Techonologie[] Returns an array of Techonologie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Techonologie
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
