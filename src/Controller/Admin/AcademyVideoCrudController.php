<?php

namespace App\Controller\Admin;

use App\Entity\AcademyVideo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class AcademyVideoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AcademyVideo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),

            TextField::new('title', 'Título'),

            TextField::new('urlOriginal', 'URL de Medal.tv')
                ->setHelp('Ejemplo: https://medal.tv/clips/'),



            ChoiceField::new('type', 'Tipo')
                ->setChoices([
                    'Smoke' => 'smoke',
                    'Flash' => 'flash',
                    'Molotov' => 'molotov',
                    'Grenade' => 'grenade',
                ]),

            ChoiceField::new('map', 'Mapa')
                ->setChoices([
                    'Mirage' => 'mirage',
                    'Inferno' => 'inferno',
                    'Dust 2' => 'dust2',
                    'Nuke' => 'nuke',
                    'Overpass' => 'overpass',
                    'Ancient' => 'ancient',
                    'Anubis' => 'anubis',
                ]),

            TextareaField::new('description', 'Descripción'),
        ];
    }

    public function persistEntity(\Doctrine\ORM\EntityManagerInterface $entityManager, $entityInstance): void
    {
        $this->processVideoUrl($entityInstance);
        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(\Doctrine\ORM\EntityManagerInterface $entityManager, $entityInstance): void
    {
        $this->processVideoUrl($entityInstance);
        parent::updateEntity($entityManager, $entityInstance);
    }

    private function processVideoUrl(AcademyVideo $video): void
    {
        if ($video->getUrlOriginal()) {
            $clipId = $this->extractClipId($video->getUrlOriginal());
            if ($clipId) {
                $video->setClipId($clipId);
            }
        }
    }

    private function extractClipId(string $url): ?string
    {
        // Regex para capturar ID y parámetros opcionales (invite)
        if (preg_match('/medal\.tv\/.*(?:\/clips?\/)([a-zA-Z0-9_-]+(?:\?.*)?)/', $url, $matches)) {
            return $matches[1];
        }
        return null;
    }
}