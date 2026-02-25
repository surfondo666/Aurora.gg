<?php

namespace App\Repository;

use App\Entity\Skin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Skin>
 */
class SkinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skin::class);
    }

    //    /**
    //     * @return Skin[] Returns an array of Skin objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Skin
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * @return array Returns all skins grouped by collection name
     */
    public function findAllGroupedByCollection(): array
    {
        $skins = $this->findAll();
        $grouped = [];

        foreach ($skins as $skin) {
            $colName = $skin->getColeccion() ?: 'Unknown Collection';
            if (!isset($grouped[$colName])) {
                $grouped[$colName] = [
                    'id' => strtolower(str_replace(' ', '_', $colName)),
                    'name' => $colName,
                    'items' => []
                ];
            }

            $grouped[$colName]['items'][] = [
                'id' => $skin->getId(),
                'name' => $skin->getName(),
                'imageUrl' => $skin->getImage(),
                'rarity' => $skin->getRarity(),
                'rarityColor' => $this->getRarityColor($skin->getRarity()),
                'weapon' => $skin->getWeapon(),
                'price' => $skin->getPrice()
            ];
        }

        // Convert associative array to indexed array for JSON/Twig
        return array_values($grouped);
    }

    private function getRarityColor(string $rarity): string
    {
        return match ($rarity) {
            'Contraband' => '#e4ae39',
            'Covert' => '#eb4b4b',
            'Classified' => '#d32ce6',
            'Restricted' => '#8847ff',
            'Mil-Spec Grade' => '#4b69ff',
            'Industrial Grade' => '#5e98d9',
            'Consumer Grade' => '#b0c3d9',
            'Extraordinary' => '#ede4d4', // For gloves
            default => '#b0c3d9',
        };
    }
}
