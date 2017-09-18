<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImportFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('importar', FileType::class, array(
                'label' => 'Fichero csv',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ));
    }

//    public function setDefaultOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefault(array(
//            'data_class' => Conductas::class,
//        ));
//
//    }
}