<?php

namespace App\Controller\Backend;

use App\Entity\User;
use App\Entity\Role;

use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\ExpressionLanguage\Expression;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("backend/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="backend_user_index", methods="GET")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('Backend/user/index.html.twig', ['users' => $userRepository->findAll()]);
    }

    /**
     * @Route("/new", name="backend_user_new", methods="GET|POST")
     *
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();

        //$user->setRole($role);

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // je recupère le mot de passe encodé de mon nouvel utilisateur
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            // Je le set à mon objet user
            $user->setPassword($encoded);
            // Par defaut l'utilisateur aura toujours le rôle ROLE_USER
            //$user->setRole('ROLE_USER');

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'notice',
                'Votre inscription à bien été prise en compte'
            );

            return $this->redirectToRoute('backend_question_index');
        }

        return $this->render('Backend/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_user_show", methods="GET")
     */
    public function show(User $user): Response
    {
        return $this->render('Backend/user/show.html.twig', ['user' => $user]);
    }

    /**
     * @Route("/{id}/edit", name="backend_user_edit", methods="GET|POST")
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $encoder): Response
    {
        //je recupère l'ancien mdp AVANT handlerequest qui lui va modifier mon objet user
        $oldPassword = $user->getPassword();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // SI le champ mot de passe est null je conserve l'ancien sinon je le met à jour
            if(is_null($user->getPassword()))
            {
                $encodedPassword = $oldPassword;
            }
            // SINON je le met à jour
            else {

                $encodedPassword = $encoder->encodePassword($user, $user->getPassword());
            }
            $this->addFlash(
                'notice',
                'Vos modifications ont bien été prises en compte'
            );

            // Je le set à mon objet user
           $user->setPassword($encodedPassword);

           $this->getDoctrine()->getManager()->flush();

           return $this->redirectToRoute('backend_user_edit', ['id' => $user->getId()]);

        }



        return $this->render('Backend/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backend_user_delete", methods="DELETE")
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('backend_user_index');
    }
}
