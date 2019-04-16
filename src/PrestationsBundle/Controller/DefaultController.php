<?php

namespace PrestationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Prestations/Default/index.html.twig');
    }
    public function adminAction()
    {
        return $this->render('@Prestations/Default/admin.html.twig');
    }
    public function goToCalendarAction(){
        return $this->render('@Prestations/prestations/Calendrier.html.twig');
    }
}
