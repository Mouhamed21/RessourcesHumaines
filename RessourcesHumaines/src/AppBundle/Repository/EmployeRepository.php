<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * EmployeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EmployeRepository extends \Doctrine\ORM\EntityRepository
{
    public function findConjoints($id)
    {
        $qb=$this->createQueryBuilder('e');
        $qb
            ->select('c')
            ->from('AppBundle:Conjoint','c')
            ->where('c.tag != 1')
            ->andWhere('c.employe = :id')
            ->setParameter('id', $id);
        return $qb;
        ;

    }
    public function getEmployes()
    {
        $qb=$this->createQueryBuilder('e');
        $qb
            ->select('e.id','e.nom','e.prenom','e.matricule','e.tag')
            ->where('e.tag != 1')
            ;
        return $qb ->getQuery()->getResult();
    }

}