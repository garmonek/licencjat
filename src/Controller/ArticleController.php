<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/wstep", name="wstep")
     */
    public function article_one()
    {
        return $this->render('article/wstep.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    /**
     * @Route("/psychologia", name="psychologia")
     */
    public function article_two()
    {
        return $this->render('article/psycho.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/porady", name="porady")
     */
    public function article_three()
    {
        return $this->render('article/porady.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/dodatkowo", name="dodatkowo")
     */
    public function article_four()
    {
        return $this->render('article/dodatkowo.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
}
