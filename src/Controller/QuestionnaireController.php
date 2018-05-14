<?php
// src/Controller/QuestionnaireController.php
namespace App\Controller;

use App\Form\QuestionnaireType;
use App\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



class QuestionnaireController extends Controller
{   

    


    /*public function autocompleteAction(Request $request)
    {
        

        //Construction de la requete
        $strQuery = "SELECT code_postal codePostal, commune commune FROM epci WHERE ";
        if (isset($_POST["codePostal"]))
        {
            $strQuery .= "code_postal LIKE :codePostal ";
        }
        else
        {
            $strQuery .= "commune LIKE :commune ";
        }



        $requete = $bdd->prepare($strQuery);

        if (isset($_POST["codePostal"]))
        {
            $value = $_POST["codePostal"]."%";
            $requete->bindParam(":codePostal", $value, PDO::PARAM_STR);
        }
        else
        {
            $value = $_POST["commune"]."%";
            $requete->bindParam(":commune", $value, PDO::PARAM_STR);
        }

        $requete->execute();

        $list = $requete->fetchAll(PDO::FETCH_CLASS, "Questionnaire");


        echo json_encode($list); // il n'y a plus qu'à convertir en JSON
        }*/


        
    public function findItems()
    {
        // La table en base de données correspondant à l'entité liée au repository en cours
        $table = $this->getClassMetadata()->table["epci"];


        // Sélection des communeset codes postaux
        $sql =  "SELECT m.code_postal codePostal, m.commune commune "
                ."FROM ".$table." AS m "
                ."WHERE (m.code_postal LIKE :codePostal OR m.commune LIKE :commune) ";


        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addEntityResult(MyClass::class, "m");

        // On mappe le nom de chaque colonne en base de données sur les attributs de nos entités
        foreach ($this->getClassMetadata()->fieldMappings as $obj) {
            $rsm->addFieldResult("m", $obj["code_postal"], $obj["codePostal"], $obj["commune"], $obj["commune"]);
        }

        $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);

        /*$stmt->setParameter(":current_time", new \DateTime("now"));
        $stmt->setParameter(":status_available", MyClass::STATUS_AVAILABLE);
        $stmt->setParameter(":status_unknown", MyClass::STATUS_UNKNOWN);
        $stmt->setParameter(":status_unavailable", MyClass::STATUS_UNAVAILABLE);*/

        $stmt->execute();


        return $stmt->getResult();

        /*return new JsonResponse($stmt);

        // if you know the data to send when creating the response
        $response = new JsonResponse(array('data' => 123));

        // if you don't know the data to send when creating the response
        $response = new JsonResponse();
        // ...
        $response->setData(array('data' => 123));

        // if the data to send is already encoded in JSON
        $response = JsonResponse::fromJsonString('{ "data": 123 }');

                use Symfony\Component\HttpFoundation\JsonResponse;*/

                


        
    }

   

    /**
     * @Route("/question", name="questionnaire")
     */
    
    public function respondAction(Request $request)
    {
        
        $questionnaire = new Questionnaire();
        $form = $this->createForm(QuestionnaireType::class, $questionnaire);
        

        
        
        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionnaire);
            $em->flush();
            
            return $this->redirectToRoute('login');
        }
        return $this->render('questionnaire.html.twig',
            
            array('form' => $form->createView())
        );
    }
}                     
?>