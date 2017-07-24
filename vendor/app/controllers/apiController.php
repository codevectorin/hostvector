<?php

namespace app\controllers;

use \system\controllers\Controller;

/**
 *
 */
class supportController extends Controller
{
    
    public function add(){

    	$dataModel = new \app\models\CommentModel;
    	
        $path=isset($_POST['path'])?$_POST['path']:null;

        $returnCode=$dataModel->saveMessage();
        
    	if($returnCode===true){
    		header('Location: '.$path);
    	}
    	exit;
    }
}
