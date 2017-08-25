<?php namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends Controller
{
    /**
     * @Route("/demo", name="demo_page")
     */
    public function indexAction()
    {
        return $this->render('demo/index.html.twig');
    }
}
