<?php

namespace App\Repository;

use App\Entity\NazwaProduktu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NazwaProduktu>
 *
 * @method NazwaProduktu|null find($id, $lockMode = null, $lockVersion = null)
 * @method NazwaProduktu|null findOneBy(array $criteria, array $orderBy = null)
 * @method NazwaProduktu[]    findAll()
 * @method NazwaProduktu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NazwaProduktuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NazwaProduktu::class);
    }

    public function add(NazwaProduktu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NazwaProduktu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NazwaProduktu[] Returns an array of NazwaProduktu objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NazwaProduktu
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
