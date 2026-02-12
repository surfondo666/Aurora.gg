<?php

namespace App\Repository;

use App\Entity\GameSkin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GameSkin>
 *
 * @method GameSkin|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameSkin|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameSkin[]    findAll()
 * @method GameSkin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameSkinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameSkin::class);
    }

    public function save(GameSkin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(GameSkin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
