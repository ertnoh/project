<?php

namespace ADrushka\TBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADrushkaTBundle:Default:index.html.twig');
    }
}
