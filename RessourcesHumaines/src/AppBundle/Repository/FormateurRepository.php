<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\Expr\Join;
/**
 * FormateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormateurRepository extends \Doctrine\ORM\EntityRepository
{
    public function getFormateurs(\AppBundle\Entity\OffreFormation $offreformation)
    {
        $qb=$this->createQueryBuilder('f')
            ->select('f.id','f.nomformateur','f.prenomformateur','f.fonction','f.telephone','f.email','f.boitepostale',
            'f.codereference','f.themeseminaire','f.tarifsemaine','fr.id as idfr')
            ->innerJoin('AppBundle:FormateurRetenu', 'fr', Join::WITH, 'f.id = fr.formateur')
            ->innerJoin('AppBundle:OffreFormation', 'o', Join::WITH, 'fr.offreformation = o.id')
            //->where('fe.tag != 1')
            ->andWhere('o.id = :offreformationId')
            ->setParameter('offreformationId', $offreformation->getId())
        ;

        try {
            return ($qb ->getQuery()->getResult());
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
      
    }
    public function findFormateur(\AppBundle\Entity\FormateurRetenu $formateurretenu)
    {
        $qb=$this->createQueryBuilder('f')
            ->select('f.id','f.nomformateur','f.prenomformateur','f.fonction','f.telephone','f.email','f.boitepostale',
            'f.codereference','f.themeseminaire','f.tarifsemaine','fr.id as idfr')
            ->innerJoin('AppBundle:FormateurRetenu', 'fr', Join::WITH, 'f.id = fr.formateur')
            ->innerJoin('AppBundle:OffreFormation', 'o', Join::WITH, 'fr.offreformation = o.id')
            //->where('fe.tag != 1')
            ->andWhere('fr.id = :formateurretenuId')
            ->setParameter('formateurretenuId', $formateurretenu->getId())
        ;

        try {
            return ($qb ->getQuery()->getSingleResult());
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    public function getFormateur(\AppBundle\Entity\FormateurRetenu $formateurretenu)
    {
        $qb=$this->createQueryBuilder('f')
            ->select('f.id','f.nomformateur','f.prenomformateur','f.fonction','f.telephone','f.email','f.boitepostale',
            'f.codereference','f.themeseminaire','f.tarifsemaine','o.id as idoff')
            ->innerJoin('AppBundle:FormateurRetenu', 'fr', Join::WITH, 'f.id = fr.formateur')
            ->innerJoin('AppBundle:OffreFormation', 'o', Join::WITH, 'fr.offreformation = o.id')
            //->where('fe.tag != 1')
            ->andWhere('fr.id = :formateurretenuId')
            ->setParameter('formateurretenuId', $formateurretenu->getId())
        ;

        try {
            return ($qb ->getQuery()->getSingleResult());
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
