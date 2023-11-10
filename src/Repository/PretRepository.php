<?php

namespace App\Repository;

use App\Entity\Pret;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pret>
 *
 * @method Pret|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pret|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pret[]    findAll()
 * @method Pret[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PretRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pret::class);
    }

    //    /**
    //     * @return Pret[] Returns an array of Pret objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Pret
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findAllWithUsers()
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.materiel_emprunte', 'm')
            ->leftJoin('p.user_emprunteur', 'u')
            ->addSelect('u')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find one Pret entity with associated User.
     *
     * @param int $pretId
     * @return Pret|null
     */
    public function findOneWithUser(int $pretId): ?Pret
    {
        return $this->createQueryBuilder('pret')
            ->leftJoin('pret.user_emprunteur', 'user')
            ->leftJoin('pret.materiel_emprunte', 'm') // Corrected the alias to 'm' instead of 'p'
            ->where('pret.id = :pretId')
            ->setParameter('pretId', $pretId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
