<?php
// src/Controller/QuestionnaireController.php
namespace App\Controller;
use App\Form\QuestionnaireType;
use App\Entity\Questionnaire;
use App\Entity\AutoCompletionCPVille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuestionnaireController extends Controller
{   
    public function autoCompletion()
    {
       //require_once('AutoCompletionCPVille.php');
        $autoCompletion = new AutoCompletionCPVille();

        //Initialisation de la liste
        $list = array();

        //Connexion MySQL
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=cci_platform', 'root');
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }

        //Construction de la requete
        $strQuery = " SELECT code_postal, commune FROM epci ";
        if (isset($_POST["code_postal"]))
        {
            $strQuery .= "Code Postal LIKE :codePostal ";
        }
        else
        {
            $strQuery .= "Commune LIKE :ville ";
        }
        
        //Limite
        if (isset($_POST["maxRows"]))
        {
            $strQuery .= "LIMIT 0, :maxRows";
        }
        $query = $db->prepare($strQuery);
        if (isset($_POST["code_postal"]))
        {
            $value = $_POST["code_postal"]."%";
            $query->bindParam(":codePostal", $value, PDO::PARAM_STR);
        }
        else
        {
            $value = $_POST["ville"]."%";
            $query->bindParam(":ville", $value, PDO::PARAM_STR);
        }
        //Limite
        if (isset($_POST["maxRows"]))
        {
            $valueRows = intval($_POST["maxRows"]);
            $query->bindParam(":maxRows", $valueRows, PDO::PARAM_INT);
        }

        $query->execute();

        $list = $query->fetchAll(PDO::FETCH_CLASS, "AutoCompletionCPVille");

        echo json_encode($list);
        
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
        return $this->render(
            'questionnaire.html.twig',
            array('form' => $form->createView())
        );
    }
}
        

                        
?>