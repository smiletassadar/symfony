<?php

namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@AcmeBundleBlog/Default/index.html.twig');
    }

    /**
     * @Route("/blog_list")
     */

    public function blog_listAction()
    {
        return $this->render('@AcmeBundleBlog/Default/list.html.twig');
    }
}
