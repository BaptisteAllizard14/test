<?php

namespace App\Repository;

use App\Entity\EvaluationArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EvaluationArticle>
 *
 * @method EvaluationArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvaluationArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvaluationArticle[]    findAll()
 * @method EvaluationArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvaluationArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvaluationArticle::class);
    }

//    /**
//     * @return EvaluationArticle[] Returns an array of EvaluationArticle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EvaluationArticle
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
