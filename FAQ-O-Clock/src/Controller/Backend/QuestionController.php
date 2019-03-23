<?php

namespace App\Controller\Backend;

use App\Entity\Question;
use App\Entity\Answer;
use App\Entity\User;

use App\Form\QuestionType;
use App\Form\AnswerType;

use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("backend/question")
 */
class QuestionController extends Controller
{
    /**
     * @Route("/", name="backend_question_index", methods="GET")
     */
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('Backend/question/index.html.twig', [
            /* essaie avec un repository personnalisé */
            //'questions' => $questionRepository->findAllOrderedByDate()]);
            'questions' => $questionRepository->findby([], ['created_at'=> 'DESC']),
        ]);
    }

    /**
     * @Route("/new", name="backend_question_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        /*
            Je veux récupérer l'username et l'id de l'utilisateur connecté
            pour l'envoyer en bdd
         */
        $user = $this->getUser();
        $usernameConnect = $user->getUsername();
        $userIdConnect = $user->getId();

        $question = new Question();

        /*
            J'incorpore l'Username et l'id récupèré dans
            le champs author et user_id:
         */
        $question->setAuthor($usernameConnect);
        //$question->setUser($userIdConnect);

        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('backend_question_index');
        }

        return $this->render('Backend/question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_question_show", methods="get|POST")
     */
    public function show(Question $question, QuestionRepository $questionRepository, Answer $Answer , Request $request): Response
    {
        /*
            Je veux récupérer l'username et l'id de l'utilisateur connecté
            pour l'envoyer en bdd
         */
        $user = $this->getUser();
        $usernameConnect = $user->getUsername();
        $userIdConnect = $user->getId();
        //dump($userIdConnect );exit;
        /*
            J'utilise l'entité Answer pour permettre de recupèrer
            les réponses envoyé dans le form
        */
        $answer = new Answer();
        /*
            J'incorpore l'Username et l'id récupèré dans
            le champs author et user_id:
         */
        $answer->setAuthor($usernameConnect);
        //$answer->setUser($userIdConnect);

        $form = $this->createForm(AnswerType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            $this->addFlash(
                 'notice',
                 'Votre réponse à bien été envoyée'
             );

            //dump($answer);exit;
            return $this->redirectToRoute('backend_question_show',['id' => $question->getId()]);
        }


        return $this->render('Backend/question/show.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="backend_question_edit", methods="GET|POST")
     */
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backend_question_edit', ['id' => $question->getId()]);
        }

        $this->addFlash(
            'notice',
            'Vos modifications ont bien été prises en compte'
        );

        return $this->render('Backend/question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_question_delete", methods="DELETE")
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($question);
            $em->flush();
        }

        return $this->redirectToRoute('backend_question_index');
    }

}
