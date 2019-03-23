<?php

namespace App\Controller\Backend;

use App\Entity\Answer;
use App\Entity\Question;

use App\Form\AnswerType;
use App\Repository\AnswerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("backend/answer")
 */
class AnswerController extends Controller
{
    /**
     * @Route("/", name="backend_answer_index", methods="GET")
     */
    public function index(AnswerRepository $answerRepository): Response
    {
        return $this->render('Backend/answer/index.html.twig', ['answers' => $answerRepository->findAll()]);
    }


    /**
     * @Route("/new", name="backend_answer_new", methods="GET|POST")
     *
     */
    public function new(Request $request, Question $Question): Response
    {
        $user = $this->getUser();

        $answer = new Answer();
        $answer->setUser($user);

        $form = $this->createForm(AnswerType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //$answer->setQuestion($currentQuestion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('backend_answer_index');
        }

        return $this->render('Backend/answer/new.html.twig', [
            'answer' => $answer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_answer_show", methods="GET")
     */
    public function show(Answer $answer): Response
    {

        return $this->render('Backend/answer/show.html.twig', [
            'answer' => $answer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="backend_answer_edit", methods="GET|POST")
     */
    public function edit(Request $request, Answer $answer): Response
    {
        $form = $this->createForm(AnswerType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('backend_answer_edit', ['id' => $answer->getId()]);
        }
        $this->addFlash(
            'notice',
            'Vos modifications ont bien été prises en compte'
        );

        return $this->render('Backend/answer/edit.html.twig', [
            'answer' => $answer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_answer_delete", methods="DELETE")
     */
    public function delete(Request $request, Answer $answer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$answer->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($answer);
            $em->flush();
        }

        return $this->redirectToRoute('backend_answer_index');
    }
}
