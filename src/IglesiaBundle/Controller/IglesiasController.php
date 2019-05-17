<?php

namespace IglesiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IglesiasController extends Controller
{


public function iglesiasAction()
    {


        return $this->render('@Iglesia/Iglesias/iglesias.html.twig');
 
    }


}
