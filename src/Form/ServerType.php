<?php

namespace App\Form;

use App\Entity\Server;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputStyle = 'w-full bg-black border border-zinc-700 rounded p-3 text-white placeholder-zinc-500 focus:border-aurora-gold focus:ring-1 focus:ring-aurora-gold/50 outline-none mb-4';
        
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nombre Público',
                'attr' => ['class' => $inputStyle]
            ])
            ->add('ipAdress', TextType::class, [
                'label' => 'IP / Dominio',
                'attr' => ['class' => $inputStyle]
            ])
            ->add('port', IntegerType::class, [ 
                'label' => 'Puerto (Query Port)', 
                'attr' => ['class' => $inputStyle, 'placeholder' => 'Ej: 27015 (CS) o 25565 (MC)']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Server::class,
        ]);
    }
}