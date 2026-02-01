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

            // CAMPO PARA SUBIR EL VIDEO
            ImageField::new('videoFilename', 'Archivo de Video (MP4)')
                ->setBasePath('uploads/academy/videos') 
                ->setUploadDir('public/uploads/academy/videos') 
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                // Validación para aceptar solo videos
                ->setFileConstraints(new \Symfony\Component\Validator\Constraints\File([
                    'maxSize' => '50M', 
                    'mimeTypes' => [
                        'video/mp4',
                        'video/mpeg',
                        'video/quicktime',
                    ],
                    'mimeTypesMessage' => 'Por favor sube un video válido (MP4)',
                ])),

            // CAMPO PARA SUBIR LA MINIATURA (Imagen)
            ImageField::new('thumbnailFilename', 'Miniatura (Portada)')
                ->setBasePath('uploads/academy/thumbnails')
                ->setUploadDir('public/uploads/academy/thumbnails')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),

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