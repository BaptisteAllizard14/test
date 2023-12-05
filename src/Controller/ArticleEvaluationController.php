<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleEvaluationController extends AbstractController
{
    #[Route('/article/evaluation', name: 'app_article_evaluation')]
    public function index(): Response
    {
        return $this->render('article_evaluation/index.html.twig', [
            'controller_name' => 'ArticleEvaluationController',
        ]);
    }
}
