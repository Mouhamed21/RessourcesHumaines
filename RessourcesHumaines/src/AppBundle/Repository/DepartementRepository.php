<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * DepartementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DepartementRepository extends \Doctrine\ORM\EntityRepository
{
    public function getServices()
    {
        $qb=$this->createQueryBuilder('de')
            ->select('s.id','de.nomdepartement','s.nomservice')
            ->innerJoin('AppBundle:Service', 's', Join::WITH, 'de.id = s.departement')
            ->andwhere('s.tag != 1')
        ;

        try {
            return $qb ->getQuery()->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

}
