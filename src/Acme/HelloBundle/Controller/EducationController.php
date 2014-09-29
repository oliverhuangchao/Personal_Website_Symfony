<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EducationController extends Controller
{
    public function indexAction($university)
    {
        return $this->render( 'AcmeHelloBundle:Education:index.html.twig',array('university' => $university) );
    }
}
