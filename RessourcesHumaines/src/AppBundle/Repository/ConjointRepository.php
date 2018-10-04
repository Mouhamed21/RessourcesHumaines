<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * ConjointRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConjointRepository extends \Doctrine\ORM\EntityRepository
{
    public function findConjoints($id)
    {
        $qb=$this->createQueryBuilder('c');
        $qb
            ->select('e')
            ->from('AppBundle:Employe','e')
            ->where('c.tag != 1')
            ->andWhere('e.id = :id')
            ->setParameter('id', $id);
        return $qb;
        ;

    }
    public function getConjoints(\AppBundle\Entity\Employe $employe)
    {
        $qb=$this->createQueryBuilder('c')
            ->select('c.id','c.prenomConjoint','c.nomConjoint','c.dateNaissance',
            'c.situationProfessionnelle', 'e.id as idemp')
            ->innerJoin('AppBundle:Employe', 'e', Join::WITH, 'e.id = c.employe')
            ->where('c.tag != 1')
            ->andWhere('e.id = :employeId')
            ->setParameter('employeId', $employe->getId())
        ;

        try {
            return ($qb ->getQuery()->getResult());
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
