<?php

namespace Mmi\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/BlogBundle")
     * @Template()
     */
    public function indexAction()
    {
        return $this->get('templating')->renderResponse('MmiBlogBundle::index.html.twig');
    }
}
