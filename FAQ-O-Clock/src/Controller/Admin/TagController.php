<?php

    namespace App\Controller\Admin;

use App\Entity\Tag;
use App\Form\TagType;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/tag")
 */
class TagController extends Controller
{
    /**
     * @Route("/", name="admin_tag_index", methods="GET")
     * View seulement disponible pour les moderateur et admin
     * pour gerer les tags
     */
    public function indexTagAdmin(TagRepository $tagRepository): Response
    {
        return $this->render('Admin/tag/index.html.twig', ['tags' => $tagRepository->findAll()]);
    }
}
