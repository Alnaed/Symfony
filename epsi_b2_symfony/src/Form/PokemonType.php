<?php

namespace App\Form;

use App\Entity\Pokemon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Enable')
            ->add('CreatedAt')
            ->add('UpdatedAt')
            ->add('DeletedAt')
            ->add('Name')
            ->add('Type')
            ->add('Hitpoint')
            ->add('Attacc')
            ->add('pokemonTeam')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pokemon::class,
        ]);
    }
}