<?php

namespace Acme\ListsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeListsBundle:Default:index.html.twig');
    }
}
