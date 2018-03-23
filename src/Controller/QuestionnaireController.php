<?php
// src/Controller/QuestionnaireController.php
namespace App\Controller;
use App\Form\QuestionnaireType;
use App\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuestionnaireController extends Controller
{
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