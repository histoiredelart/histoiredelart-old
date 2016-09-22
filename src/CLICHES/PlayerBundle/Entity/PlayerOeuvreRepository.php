<?php

namespace CLICHES\PlayerBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PlayerOeuvreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlayerOeuvreRepository extends EntityRepository
{
    public function getPassedNumberPlayerOeuvre($session)
    {
        return $this->createQueryBuilder('u')
                    ->where('u.playerSession = :playerSession')
                    ->setParameter('playerSession', $session)
                    ->getQuery()
                    ->getResult()
        ;
    }
}
