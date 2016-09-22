<?php

namespace DATA\TeachingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TeachingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TeachingRepository extends EntityRepository
{
    //Fonction retournant le compte d'oeuvres par matiere
    public function countOeuvres($teaching) {
        $nbArtworks =  $this->createQueryBuilder('u')
                            ->select('COUNT(u.artworks)')
                            ->where('u.name = :teaching')
                            ->setParameter('teaching', $teaching)
                            ->getQuery()
                            ->getSingleScalarResult();
        $nbBuildings =  $this->createQueryBuilder('u')
                            ->select('COUNT(u.buildings)')
                            ->where('u.name = :teaching')
                            ->setParameter('teaching', $teaching)
                            ->getQuery()
                            ->getSingleScalarResult();
        
        return $nbArtworks+$nbBuildings;
    }
}
