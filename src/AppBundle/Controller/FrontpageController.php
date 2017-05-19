<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * This is a controller for the front page of the project
 *
 * @author Eseyas Abraha
 */
class FrontpageController extends Controller
{
    /**
     * @Route("/welcome", name = "welcome")
     */
    public function showAction()
    {
        return $this->render(':frontpage:frontpage.html.twig'); 
    }
}
