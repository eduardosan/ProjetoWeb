<?php

namespace Grupo\ProjetoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexControllerController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GrupoProjetoBundle:IndexController:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('GrupoProjetoBundle:IndexController:show.html.twig', array(
            // ...
        ));
    }

}
