<?php

namespace App\Controller\Admin;

use App\Entity\ConsoleCommand;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ConsoleCommandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConsoleCommand::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Comando'),
            TextField::new('usage', 'Uso (ej: !bind)'),
            ChoiceField::new('category', 'Categoría')
                ->setChoices([
                    'Cheats' => 'cheat',
                    'Binds' => 'bind',
                    'Settings' => 'setting',
                    'Other' => 'other',
                ]),
            TextareaField::new('description', 'Descripción'),
        ];
    }
}
