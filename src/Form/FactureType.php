<?php

namespace App\Form;

use App\Entity\Facture;
use App\Entity\Produit;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('client',EntityType::class,['class'=> Client::class,
                'choice_label'=>'nom',
                'label'=>'Nom client'])
            ->add('produit',EntityType::class,['class'=> Produit::class,
                'choice_label'=>'code',
                'label'=>'Code produit'])
            ->add('designation')
            ->add('quantite')
            ->add('pu')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
