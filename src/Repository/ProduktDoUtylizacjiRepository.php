<?php

namespace App\Repository;

use App\Entity\ProduktDoUtylizacji;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProduktDoUtylizacji>
 *
 * @method ProduktDoUtylizacji|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduktDoUtylizacji|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduktDoUtylizacji[]    findAll()
 * @method ProduktDoUtylizacji[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduktDoUtylizacjiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduktDoUtylizacji::class);
    }

    public function add(ProduktDoUtylizacji $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProduktDoUtylizacji $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProduktDoUtylizacji[] Returns an array of ProduktDoUtylizacji objects
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

//    public function findOneBySomeField($value): ?ProduktDoUtylizacji
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
