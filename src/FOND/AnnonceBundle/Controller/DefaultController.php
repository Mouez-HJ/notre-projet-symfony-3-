<?php

namespace FOND\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FONDAnnonceBundle:Default:index.html.twig');
    }
}
