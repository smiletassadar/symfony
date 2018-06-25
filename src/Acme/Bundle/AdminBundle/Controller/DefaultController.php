<?php

namespace Acme\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AcmeAdmin/Default/index.html.twig');
    }
}
