<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => false, // Ocultar etiqueta estándar
                'attr' => [
                    'placeholder' => 'Título interesante...',
                    'class' => 'w-full bg-black/40 border border-aurora-border rounded px-4 py-2 text-white placeholder-gray-500 focus:border-aurora-gold outline-none'
                ],
                // ¡AQUÍ NO PUEDES PONER 'widget'!
            ])
            ->add('content', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => '¿Qué estás pensando? Comparte con la comunidad...',
                    'class' => 'w-full bg-black/40 border border-aurora-border rounded px-4 py-2 text-white h-32 placeholder-gray-500 focus:border-aurora-gold outline-none resize-none mt-2'
                ]
            ])
            ->add('category', ChoiceType::class, [
                'label' => false,
                'choices'  => [
                    'General' => 'General',
                    'Showcase (Skins)' => 'Showcase',
                    'Duda / Ayuda' => 'Ayuda',
                    'Noticias' => 'Noticias',
                    'Meme' => 'Meme',
                ],
                'attr' => [
                    'class' => 'bg-black text-white border border-aurora-border rounded px-2 py-1 text-sm mt-2 focus:border-aurora-gold outline-none'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}