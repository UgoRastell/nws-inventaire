<?php

namespace App\Form;

use App\Entity\Pret;
use App\Entity\Materiel; // Don't forget to import the Materiel entity
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; // Import EntityType
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class PretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_rendu_prevue', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('statut')
            ->add('materiel_emprunte', EntityType::class, [
                'class' => Materiel::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('m')
                        ->where('m.quantity > 0');
                },
            ])
            ->add('user_emprunteur', EntityType::class, [
                'class' => 'App\Entity\User', // Replace with the correct namespace for your User entity
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.email', 'ASC'); // Adjust this based on your user entity structure
                },
                'choice_label' => 'email', // Replace 'nom' with the property you want to display in the dropdown
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pret::class,
        ]);
    }
}
