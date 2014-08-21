<?php

namespace frontend\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class blogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->add('title', 'text', array('required' => false, 'label' => 'Titre'))
            ->add('author', 'text', array('required' => false, 'label' => 'Auteur'))
            ->add('text', 'textarea', array('required' => false, 'label' => 'Article', 'attr' => array('class' => 'ckeditor')))
            ->add('created', 'date', array('required' => false, 'label' => 'Créé'))
            ->add('updated', 'date', array('required' => false, 'label' => 'Update'))
            ->add('type', 'entity', array('class' => 'BlogBundle:BlogType', 'label' => 'Type de l\'article'))
            ->add('techno', 'entity', array('class' => 'BlogBundle:BlogTechno', 'label' => 'Technologie utilisée'))
            ->add('name_file', 'text', array('required' => false, 'label' => "Nom du fichier"))
            ->add('is_publish', 'checkbox', array('label' => 'Afficher publiquement', 'required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'frontend\BlogBundle\Entity\blog'
        ));
    }

    public function getName()
    {
        return 'frontend_blogbundle_blogtype';
    }
}
