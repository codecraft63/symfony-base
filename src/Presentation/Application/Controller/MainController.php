<?php namespace App\Presentation\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="root")
     */
    public function indexAction()
    {
        return $this->render('main/index.html.twig');
    }
}
