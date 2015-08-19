<?php

namespace Ens\JobeetyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsJobeetyBundle:Default:index.html.twig', array('name' => $name));
    }
}
