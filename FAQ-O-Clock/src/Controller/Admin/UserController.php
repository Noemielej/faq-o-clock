<?php

namespace App\Controller\Admin;

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
 * @Route("admin/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="admin_user_index", methods="GET")
     * View seulement disponible pour les admin
     * pour gerer les utilisateurs
     */
    public function indexUserAdmin(UserRepository $userRepository): Response
    {
        return $this->render('Admin/user/index.html.twig', ['users' => $userRepository->findAll()]);
    }
}
