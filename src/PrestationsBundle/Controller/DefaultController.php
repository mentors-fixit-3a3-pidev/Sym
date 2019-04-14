<?php

namespace PrestationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrestationsBundle:Default:base.html.twig');
    }
}
