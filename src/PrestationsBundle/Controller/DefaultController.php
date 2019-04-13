<?php

namespace PrestationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Default/index.html.twig');
    }


    public function prestationsAction(){
        return $this->render('@Prestations/Default/prestations.html.twig');
    }
}
