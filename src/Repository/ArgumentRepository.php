<?php

namespace App\Repository;

use App\Entity\Argument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Argument|null find($id, $lockMode = null, $lockVersion = null)
 * @method Argument|null findOneBy(array $criteria, array $orderBy = null)
 * @method Argument[]    findAll()
 * @method Argument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArgumentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Argument::class);
    }

//    /**
//     * @return Argument[] Returns an array of Argument objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Argument
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
