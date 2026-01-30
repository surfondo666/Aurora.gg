<?php

namespace App\Controller\Admin;

use App\Entity\AcademyGuide;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class AcademyGuideCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AcademyGuide::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title', 'Título'),
            ChoiceField::new('category', 'Categoría')
                ->setChoices([
                    'General' => 'general',
                    'Aiming' => 'aiming',
                    'Movement' => 'movement',
                    'Economy' => 'economy',
                    'Utility' => 'utility',
                ]),
            TextEditorField::new('content', 'Contenido'),
            AssociationField::new('author', 'Autor')->hideOnForm(),
            DateTimeField::new('createdAt', 'Creado')->hideOnForm(),
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof AcademyGuide && !$entityInstance->getAuthor()) {
            $entityInstance->setAuthor($this->getUser());
        }
        parent::persistEntity($entityManager, $entityInstance);
    }
}
