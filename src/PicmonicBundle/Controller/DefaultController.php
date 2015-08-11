<?php

namespace PicmonicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PicmonicBundle:Default:index.html.twig', array('name' => $name));
    }
}
