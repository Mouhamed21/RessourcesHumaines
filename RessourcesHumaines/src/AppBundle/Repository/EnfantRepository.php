<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * EnfantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnfantRepository extends \Doctrine\ORM\EntityRepository
{
    public function getEnfants(\AppBundle\Entity\Employe $employe)
    {
        $qb=$this->createQueryBuilder('e')
            ->select('e.id','e.nomEnfant','e.prenomEnfant','e.dateNaissance','e.adresse','e.sexeenfant',
                'e.handicap','e.scolariser','e.numeroIdentification','c.id as idconj', 'em.id as idenemp','c.prenomConjoint')
            ->leftJoin('AppBundle:Conjoint', 'c', Join::WITH, 'c.id = e.conjoint')
            ->innerJoin('AppBundle:Employe', 'em', Join::WITH, 'em.id = e.employe')
            ->where('e.tag != 1')
            ->andWhere('em.id = :employeId')
            ->setParameter('employeId', $employe->getId())
        ;

        try {
            return ($qb ->getQuery()->getResult());
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
