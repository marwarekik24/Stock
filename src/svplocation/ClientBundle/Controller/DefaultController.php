<?php

namespace svplocation\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('svplocationClientBundle:Default:index.html.twig');
    }
}
