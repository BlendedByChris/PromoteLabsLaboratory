<?php

namespace PromoteLabs\LaboratoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('PromoteLabsLaboratoryBundle:Main:index.html.twig');
    }
    
    public function welcomeAction()
    {
        return $this->render('PromoteLabsLaboratoryBundle:Main:welcome.html.twig');
    }
}
