<?php

namespace Swim\Controller;

use Silex\Application;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class IndexController
{
    public function indexAction(Request $request, Application $app)
    {

        $token = $app['security']->getToken();
        $user = $token->getUser();

        $data = array();
        return $app['twig']->render('index.html.twig', $data);
    }

}
