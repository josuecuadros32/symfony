<?php

namespace IglesiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{    
    

    public function loginAction(){

        
         return $this->render('@Iglesia/Auth/login.html.twig');
    }
   
    
    public function registroAction()
    {
        return $this->render('@Iglesia/Auth/registro.html.twig');
    }
}
