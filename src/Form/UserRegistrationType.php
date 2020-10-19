<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;

class UserRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,

                array(
                    'attr' => [
                        'class' => 'input'
                    ],
                    'label' => 'E-mail',
                    'label_attr' => ['class' => 'label']))
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'label' => '',
                'first_options' => array(
                    'attr' => [
                        'class' => 'input'
                    ],
                    'label' => 'Password',
                    'label_attr' => ['class' => 'label']),
                'second_options' => array(
                    'attr' => [
                        'class' => 'input'
                    ],
                    'label' => 'Repeat a password',
                    'label_attr' => ['class' => 'label'])
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
