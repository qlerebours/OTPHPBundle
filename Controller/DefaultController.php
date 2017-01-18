<?php

namespace QLerebours\OTPHPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QLereboursOTPHPBundle:Default:index.html.twig', array('name' => $name));
    }
}
