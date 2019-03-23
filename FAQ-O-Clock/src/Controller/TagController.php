<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Repository\TagRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagController extends Controller
{
    /**
     * @Route("/tag", name="tag_index", methods="GET")
     */
    public function tagIndex()
    {
        $repository = $this->getDoctrine()->getRepository(Tag::class);

        $tags = $repository->findAll();

        return $this->render('tag/index.html.twig', [
            'tags' => $tags,

        ]);
    }
    /**
     * @Route("/tag/{id}", name="tag_show", methods="GET")
     */
    public function tagShow(Tag $tag)
    {
        return $this->render('tag/show.html.twig', ['tag' => $tag]);

    }
}
