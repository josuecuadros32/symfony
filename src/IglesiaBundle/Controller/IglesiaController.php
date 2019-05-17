<?php

namespace IglesiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IglesiaController extends Controller
{


public function iglesiaAction()
    {


        return $this->render('@Iglesia/Iglesia/iglesia.html.twig');
 
    }


}

