<?php

/* Cambiamos el namespace al cambiar el Bundle */                  
namespace AppBundle\Form;
/******************************************************************************************/
use Symfony\Component\Form\AbstractType;                // Clase necesario para AbstractType
use Symfony\Component\Form\FormBuilderInterface;        // Clase necesario para AbstractType
use Symfony\Component\OptionsResolver\OptionsResolver;  // Clase necesario para AbstractType
/* Añadimos los componentes que permitirán el uso de nuevas clases ************************/
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
/******************************************************************************************/
class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('title', TextType::class, array(
            'label'=>'Titulo',
            'required'=>'required',
            'attr'=>array(
              'class'=>'form-name form-control'
            )
        ))
        ->add('body', TextareaType::class, array(
            'label'=>'Contenido',
            'required'=>'required',
            'attr'=>array(
              'class'=>'form-surname form-control'
            )
        ))
        ->add('Guardar',SubmitType::class, array(
            "attr"=>array(
              "class"=>"form-submit btn btn-info mt-3"
            )
        ));
    }

    /**************************************************************************************/
    /* DEFINIMOS LA ENTIDAD DONDE SE INCLUIRAN LOS DATOS EN LA BD *************************/
   // public function configureOptions(OptionsResolver $resolver)    {
     //   $resolver->setDefaults(array('data_class' => 'BackendBundle\Entity\User'));
    //}
}
