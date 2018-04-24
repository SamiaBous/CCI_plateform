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
            ->add('code_postal', TextType::class, array('label' => "CP"))
            ->add('commune', TextType::class, array('label' => "Commune"))
            ->add('mail', EmailType::class, array('label' => "Adresse mail"))
            ->add('quest1', TextType::class, array(
                //'choices' => array(
                       //"Chambre de Commerce et d'Industrie (CCI)" => 'CCI',
                      //"Chambre des Métiers et de l'Artisanat (CMA)" => 'CMA',
                      //"Boutique de Gestion des Entreprises (BGE)" => 'BGE',
                      //"Association pour le Droit à l'Initiative Economique (ADIE)" => 'ADIE',
                       //"Autre(s) structure(s):" => '',
                       //"Aucune de ces structures" => 'aucune',
                      //),
                'label' => "Avez-vous déjà rencontré l'une ou plusieurs des structures d'accompagnement suivantes?",
                'label_attr' => array('id' => 'struct')
                
                     
                ))
             
            ->add('quest2', TextType::class, array(
                //'choices' => array(
                        //'Agricole' => 'Agricole',
                        //'Libérale' => 'Libérale',
                        //'Artistique' => 'Artistique',
                        //'Industrie' => 'Industrie',
                        //'Artisanat' => 'Artisanat',
                        //'Commerce' => 'Commerce',
                        //'Service' => array(
                             //"Coiffure-Esthétique-Toilettage animaux" => "Coiffure-Esthétique-Toilettage animaux",
                             //"Réparations et installations en tout genre" => "Réparations et installations en tout genre",
                             //"Taxi-Ambulance-Déménagement" => "Taxi-Ambulance-Déménagement",
                             //"Photographe" => "Photographe",
                             //"Secrétariat-Administrartif" => "Secrétariat-Administrartif",
                             //"Nettoyage de locaux,Pressing,Ramonage" => "Nettoyage de locaux,Pressing,Ramonage",
                             //"Funéraires-Soins Mortuaires" => "Funéraires-Soins Mortuaires",
                             //"Autres services" =>"",
                                  //),
                        //'Autre activité' => '',
                        //'Activité non encore définie' => 'Activité non encore définie',
                      //),
                'label' => "Votre projet de création ou de reprise d'entreprise porte sur quel secteur d'activité?",
                'label_attr' => array('id' => 'activ')
                ))

            ->add('quest3', ChoiceType::class, array( 
                'choices' => array(
                        'Oui' => 'Oui',
                        'Non' => 'Non',
                        'Ne sait pas' => 'Ne sait pas',
                      ),
                'label' => "Aurez-vous besoin d'un financement bancaire?"
            ))

            ->add('quest4', ChoiceType::class, array(
                'choices' => array(
                        'Oui' => 'Oui',
                        'Non' => 'Non',
                        'Ne sait pas' => 'Ne sait pas',
                      ),
                'label' => "Pensez-vous obtenir un financement bancaire?"
            ))

            ->add('comment', TextareaType::class, array('label' => "Commentaire"));
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Questionnaire::class,
        ));
    }
}

?>