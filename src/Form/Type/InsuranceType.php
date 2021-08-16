<?php

namespace App\Form\Type;

use App\Entity\Clients;
use App\Entity\Insurance;
use App\Entity\Vehicles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InsuranceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)//: void
    {
        $builder
            ->add('clients_name', TextType::class)
            ->add('clients_coherence', TextType::class)
            ->add('clients_email', EmailType::class)
            ->add('clients_familiar', TextType::class)
            ->add('clients_EGN_EIK', IntegerType::class)
            ->add('clients_phone', IntegerType::class)

            ->add('insurance_number', IntegerType::class)
            ->add('insurance_date', DateType::class)
            ->add('insurance_activ_from', DateType::class)
            ->add('insurance_company', TextType::class)
            ->add('insurance_type', TextType::class)
            ->add('insurance_rescheduling', TextType::class)

            ->add('insurance_sum', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_sum_for_company', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_bonus', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_percent_commission', PercentType::class)
            ->add('insurance_commission', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_maturity', DateType::class)
            ->add('insurance_paid_to_company', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from', TextType::class)
            ->add('insurance_paid_method', TextType::class)
            ->add('insurance_commission_paid', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_client', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_note', TextareaType::class)
            ->add('insurance_file', FileType::class)

            ->add('insurance_sum_2', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_sum_for_company_2', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_bonus_2', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_percent_commission_2', PercentType::class)
            ->add('insurance_commission_2', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_maturity_2', DateType::class)
            ->add('insurance_paid_to_company_2', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_2', TextType::class)
            ->add('insurance_paid_method_2', TextType::class)
            ->add('insurance_commission_paid_2', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_client_2', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_note_2', TextareaType::class)
            ->add('insurance_file_2', FileType::class)

            ->add('insurance_sum_3', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_sum_for_company_3', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_bonus_3', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_percent_commission_3', PercentType::class)
            ->add('insurance_commission_3', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_maturity_3', DateType::class)
            ->add('insurance_paid_to_company_3', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_3', TextType::class)
            ->add('insurance_paid_method_3', TextType::class)
            ->add('insurance_commission_paid_3', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_client_3', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_note_3', TextareaType::class)
            ->add('insurance_file_3', FileType::class)

            ->add('insurance_sum_4', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_sum_for_company_4', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_bonus_4', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_percent_commission_4', PercentType::class)
            ->add('insurance_commission_4', MoneyType::class, ['currency' => 'BGN'])
            ->add('insurance_maturity_4', DateType::class)
            ->add('insurance_paid_to_company_4', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_4', TextType::class)
            ->add('insurance_paid_method_4', TextType::class)
            ->add('insurance_commission_paid_4', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_paid_from_client_4', ChoiceType::class, ['choices' => ['Да' => true, 'Не' => false]])
            ->add('insurance_note_4', TextareaType::class)
            ->add('insurance_file_4', FileType::class)

            ->add('vehicles_number', TextType::class)
            ->add('vehicles_document_number', TextType::class)
            ->add('vehicles_note', TextareaType::class)

            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => [Insurance::class,Clients::class,Vehicles::class]

        ]);}
}

