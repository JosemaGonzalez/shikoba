<?php

namespace AppBundle\Form;

use AppBundle\Entity\Usuarios;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Contraseña', 'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey marginBottomMore',
                    'placeholder' => 'Escriba nueva contraseña',
                ),
                    'label_attr' => array('class' => 'w3-text-teal marginTop')
                ),
                'second_options' => array('label' => 'Repite Contraseña',
                    'attr' => array(
                        'class' => 'w3-select w3-border w3-light-grey marginBottomMore',
                        'placeholder' => 'Repita nueva contraseña',
                    ),
                    'label_attr' => array('class' => 'w3-text-teal')
                ),

            ));

    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(array(
            'data_class' => Usuarios::class,
        ));
    }

}