<?php

namespace App\Controller;

use App\Entity\Question;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionController extends Controller
{
    /**
     * @Route("/", name="homepage", methods="GET")
     */
    public function homepage()
    {
        $repository = $this->getDoctrine()->getRepository(Question::class);
        /*
            J'utilise ma fonction (questionRepository)
            pour récupèrer toutes les questions par ordre décroissant
        */
        $questions = $repository->findAllOrderedByDate();
        //dump($questions);die;

        return $this->render('question/index.html.twig', [
            'questions' => $questions,

        ]);
    }
    /**
     * @Route("/show/{id}", name="question_show", methods="GET")
     */
    public function show(Question $question)
    {

        return $this->render('question/show.html.twig', [
            'question' => $question,

        ]);
    }
}
