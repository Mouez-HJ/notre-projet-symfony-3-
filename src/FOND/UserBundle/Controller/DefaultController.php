<?php

namespace FOND\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FONDUserBundle:Default:index.html.twig');
    }
}
