<?php

namespace IglesiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InicioController extends Controller
{


public function inicio_usuarioAction()
    {


        return $this->render('@Iglesia/Inicio/inicio.html.twig');
 
    }


}