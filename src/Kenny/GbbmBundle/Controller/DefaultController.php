<?php

namespace Kenny\GbbmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KennyGbbmBundle:Default:index.html.twig', array('name' => $name));
    }
}
