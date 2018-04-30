<?php
// src/Form/QuestionnaireType.php
namespace App\Form;

use App\Entity\Questionnaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;




class QuestionnaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder
            ->add('factSite', TextType::class, array('label' => "Commune d'Implantation"))
            ->add('civilite', ChoiceType::class, array(
                'choices' => array(
                        'Madame' => 'femme',
                        'Monsieur' => 'homme',
                       ),
                'label' => "Civilité"))
            ->add('lastname', TextType::class, array('label' => "Nom"))
            ->add('firstname', TextType::class, array('label' => "Prénom"))
            ->add('phone', TextType::class, array('label' => "Téléphone fixe/portable"))
            ->add('address', TextType::class, array('label' => "Adresse postale"))
            ->add('codePostal', TextType::class, array('label' => "CP"))
            ->add('commune', TextType::class, array('label' => "Commune"))
            ->add('mail', EmailType::class, array('label' => "Adresse mail"))
            ->add('quest1', TextType::class, array(
                'label' => "Avez-vous déjà rencontré l'une ou plusieurs des structures d'accompagnement suivantes?",
                'label_attr' => array('id' => 'struct')   
                ))
             
            ->add('quest2', TextType::class, array(
                'label' => "Votre projet de création ou de reprise d'entreprise porte sur quel secteur d'activité?",
                'label_attr' => array('id' => 'activ')
                ))

            ->add('service', TextType::class, array(
                //'mapped' => false,
                //'required' => false,
                'label' => "Veuillez préciser",
                'label_attr' => array('id' => 'serv')
                ))

            ->add('quest3', ChoiceType::class, array( 
                'choices' => array(
                        'Oui' => 'Oui',
                        'Non' => 'Non',
                        'Ne sait pas' => 'Ne sait pas'
                      ),
                'label' => "Aurez-vous besoin d'un financement bancaire?"
            ))

            ->add('quest4', ChoiceType::class, array(
                'choices' => array(
                        'Oui' => 'Oui',
                        'Non' => 'Non',
                        'Ne sait pas' => 'Ne sait pas'
                      ),
                'label' => "Pensez-vous obtenir un financement bancaire?"
            ))

            ->add('comment', TextareaType::class, array('label' => "Commentaire",
                                                        'required' => false
            ))

            ->add('agreeTerms', CheckboxType::class, array('mapped' => false,
                                                         'label' => "J'accepte les termes..."
            ));
            //->add('save', SubmitType::class, array('label' => "Envoyer"));


           
                                                
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Questionnaire::class
        ));
    }
}

?>