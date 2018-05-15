<?php
// src/Controller/QuestionnaireController.php
namespace App\Controller;

use App\Form\QuestionnaireType;
use App\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class QuestionnaireController extends Controller
{   
    public function getCustomInformations()
    {
        // la table en base de données correspondant à l'entité liée au repository en cours
        $table = $this->getClassMetadata()->table["epci"];

        $sql =  "SELECT m.code_postal codePostal, m.commune commune "
            ."FROM ".$table." AS m "
            ."WHERE ";
        if (isset($_POST["codePostal"]))
        {
            $sql .= "code_postal LIKE :codePostal ";
        }
        else
        {
            $sql .= "commune LIKE :commune ";
        }
        
        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addEntityResult(MyClass::class, "m");

        // On mappe le nom de chaque colonne en base de données sur les attributs de notre entité
        foreach ($this->getClassMetadata()->fieldMappings as $obj) {
        $rsm->addFieldResult("m", $obj["code_postal"], $obj["codePostal"]);
        }
        
        $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);

        $value1 = $_POST["codePostal"]."%";
        $value2 = $_POST["commune "]."%";

        $stmt->setParameters(["code_postal" => $value1, "commune" => $value2]);

        $stmt->execute();
        
        return $list = $stmt->getResult();
        /*echo json_encode($list); // il n'y a plus qu'à convertir en JSON*/

        return new JsonResponse(array('list' => $list));

 
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