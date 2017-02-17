<?php

namespace Ramity\HealthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FoodType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('brand')->add('description')->add('servingSize')->add('servingPerContainer')->add('calories')->add('totalFat')->add('saturatedFat')->add('polyunsaturatedFat')->add('monounsaturatedFat')->add('transFat')->add('cholesterol')->add('sodium')->add('potassium')->add('totalCarbs')->add('dietaryFiber')->add('sugars')->add('protein')->add('vitaminA')->add('vitaminC')->add('calcium')->add('iron')        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ramity\HealthBundle\Entity\Food'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ramity_healthbundle_food';
    }
}
