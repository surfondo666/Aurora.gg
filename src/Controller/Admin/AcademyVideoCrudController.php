<?php

namespace App\Controller\Admin;

use App\Entity\AcademyVideo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

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
            TextField::new('youtubeId', 'ID de YouTube (ej: dQw4w9WgXcQ)'),
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
                    'Vertigo' => 'vertigo',
                    'Ancient' => 'ancient',
                    'Anubis' => 'anubis',
                ]),
            TextareaField::new('description', 'Descripción'),
        ];
    }
}
