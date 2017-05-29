<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HellociController extends Controller 
{
    /**
     * @Route("/helloci")
     */
    public function sayhelloAction()
    {
        $number = $this->add(2,3);
      
        return $this->render('helloci/sayhello.html.twig', array(
              'number' => $number,
          ));
    }
  
    public function add($a, $b)
    {
        return $a + $b;
    }
}

