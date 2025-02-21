<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use VictorPrdh\RecaptchaBundle\Form\ReCaptchaType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'email ne peut pas être vide.']),
                    new Email(['message' => 'L\'email doit être valide.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                    'type' => 'email',
                ]
            ])
            ->add('username', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom d\'utilisateur ne peut pas être vide.']),
                    new Length(['min' => 3, 'max' => 50, 'minMessage' => 'Le nom d\'utilisateur doit avoir au moins {{ limit }} caractères.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom d\'utilisateur',
                ]
            ])
            ->add('age', null, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'âge ne peut pas être vide.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Âge',
                ]
            ])
            ->add('recaptcha', ReCaptchaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
