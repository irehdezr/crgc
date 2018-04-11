<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username',TextType::class, array('label'=>'Nickname'))
        ->add('firstname',TextType::class)
        ->add('lastname',TextType::class)
        ->add('email', RepeatedType::class, 
            array('type' => EmailType::class, 'invalid_message' => 'The email fields must match.','options' 
                => array('attr' => array('class' => 'email-field')),'required' => true, 'first_options'  
                => array('label' => 'Email'),'second_options' => array('label' => 'Confirm email'),))
        ->add('password', RepeatedType::class, 
            array('type' => PasswordType::class, 'invalid_message' => 'The password fields must match.','options' 
                => array('attr' => array('class' => 'password-field')),'required' => true, 'first_options'  
                => array('label' => 'Password'),'second_options' => array('label' => 'Confirm password'),))
        ->add('save',SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'user';
    }


}
