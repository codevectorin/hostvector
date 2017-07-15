<?php

namespace system\controllers;

class Controller
{
    public function __construct()
    {

    }

    public function middleware($middleware)
    {
        try {
            $middlewareName  = $middleware . 'Middleware';
            $middlewareClass = '\app\middlewares\\' . $middlewareName;

            $this->{$middlewareName} = new $middlewareClass;
        } catch (Exception $e) {

        }
    }

    public function view($view, $vars = [])
    {

        $twigLoader = new \Twig_Loader_Filesystem(BASEPATH . '/vendor/app/views');
        $twig       = new \Twig_Environment($twigLoader, array(
            'cache'       => BASEPATH . '/vendor/app/cache/templates',
            'auto_reload' => true,
        ));
        
        //$twig->addExtension(new \app\models\twigModel());

        $template = $twig->loadTemplate($view);

        echo $template->render($vars);
    }
}
