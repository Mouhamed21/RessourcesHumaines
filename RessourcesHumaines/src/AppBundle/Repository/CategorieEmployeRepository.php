<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * CategorieEmployeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieEmployeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getStatuts()
    {
        $qb=$this->createQueryBuilder('c')
            ->select('s.id','s.nomstatutemploye','c.nomcategorieemploye','c.tag')
            ->innerJoin('AppBundle:StatutEmploye', 's', Join::WITH, 's.id = c.statutemploye')
            ->andwhere('c.tag != 1')
        ;

        try {
            return $qb ->getQuery()->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    public function getCategories(\AppBundle\Entity\Employe $employe)
    {
        $qb=$this->createQueryBuilder('c')
            ->select('c.id','c.nomcategorieemploye','c.tag','e.id as idemp')
            ->innerJoin('AppBundle:Employe', 'e', Join::WITH, 'c.id = e.categorieemploye')
            ->where('c.tag != 1')
            ->andWhere('e.id = :employeId')
            ->setParameter('employeId', $employe->getId())
        ;

        try {
            return $qb ->getQuery()->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
