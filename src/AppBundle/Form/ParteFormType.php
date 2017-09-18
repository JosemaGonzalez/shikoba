<?php

namespace AppBundle\Form;

use AppBundle\Entity\Partes;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->traitChoices = $options['compound'];

        $builder
            ->add('idAlumno', EntityType::class, array(
                'label' => 'Alumno',
                'class' => 'AppBundle:Alumno',
                'choices' => $this->traitChoices[0],
                'choice_label' => function ($alumno) {
                    return $alumno->getNombreCompletoYCurso();
                },
                'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey chosen-select',
                    'data-placeholder' => 'Selecciona un alumno...',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ));
            $builder->add('idProfesor', EntityType::class, array(
                'label' => 'Profesor',
                'class' => 'AppBundle:Profesores',
                'choices' => $this->traitChoices[1],
                'choice_label' => function ($profesor) {
                    return $profesor->getNombreCompleto();
                },
                'attr' => array('class' => 'w3-select w3-border w3-light-grey chosen-select',
                    'data-placeholder' => 'Selecciona un profesor...',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
//            ->add('Fecha', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('idConducta', EntityType::class, array(
                'label' => 'Conducta',
                'class' => 'AppBundle:Conductas',
                'choice_label' => function($conducta){
                    return $conducta->getNombreAndPuntos();
                },
                'group_by' => 'tipo',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey selectForm'),
                'label_attr' => array('class' => 'w3-text-teal'),
                'expanded' => true,
                'multiple' => true,
            ))
            ->add('Descripcion', TextareaType::class, array(
                'label' => 'Descripción',
                'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('Tareas', TextareaType::class, array(
                'label' => 'Tareas',
                'required' =>false,
                'attr' => array('class' => 'w3-input w3-border w3-light-grey minTextArea'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('HoraSalidaAula', TimeType::class, array(
                'label' => 'Hora Salida Aula',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('HoraLlegadaJefatura', TimeType::class, array(
                'label' => 'Hora Llegada Jefatura',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('Formato', ChoiceType::class, array(
                'choices' => array(
                    'Papel' => 'Papel',
                    'Digital' => 'Digital'
                ),
                'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('Observacion', TextareaType::class, array(
                'required' =>false,
                'empty_data' => '',
                'label' => 'Observación',
                'attr' => array('class' => 'w3-input w3-border w3-light-grey minTextArea'),
                'label_attr' => array('class' => 'w3-text-teal'),
            ))
            ->add('fechaConfirmacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('fechaComunicacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey marginBottom'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
//            ->add('Puntos', IntegerType::class, array(
//                'required' =>false,
//                'empty_data' => 0,
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
//            ->add('idEstado', EntityType::class, array(
//                'class' => 'AppBundle:EstadosParte',
//                'choice_label' => 'estado',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('idTipo', EntityType::class, array(
                'class' => 'AppBundle:TipoParte',
                'choice_label' => 'tipo',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ));
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(array(
            'data_class' => Partes::class,
        ));

    }
}