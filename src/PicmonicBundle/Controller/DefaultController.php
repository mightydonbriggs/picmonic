<?php

namespace PicmonicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//      curl https://api.github.com/repos/joyent/node/commits

        return $this->render('PicmonicBundle:Default:index.html.twig');
    }
}
