<?php

namespace app\controllers;

use \system\controllers\Controller;

/**
 *
 */
class index extends Controller
{

    public function showPage($params)
    {
    	if(!isset($params['page']))
    		$params['page']='index';

        if (!is_file(BASEPATH . '/vendor/app/views/home/' . $params['page'] . '.html')) {
            return $this->view('error_404.tpl');
        } else {

            return $this->view('home/'.$params['page'] . '.html');
        }
    }
}
