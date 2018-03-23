<?php

namespace App\Repository;

use App\Entity\Questionnaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Query|null find($id, $lockMode = null, $lockVersion = null)
 * @method Query|null findOneBy(array $criteria, array $orderBy = null)
 * @method Query[]    findAll()
 * @method Query[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionnaireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Questionnaire::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('q')
            ->where('q.something = :value')->setParameter('value', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
