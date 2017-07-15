<?php

namespace app\controllers;

use \system\controllers\Controller;

/**
 *
 */
class commentsController extends Controller
{
    
    public function get()
    {
        $dataModel = new \app\models\CommentModel;
        $path=isset($_GET['path'])?urldecode($_GET['path']):null;
        
        if(!$dataModel->is_verified_path($path)){
            //error msg json
            echo 'error: input path error!';
            exit;
        }
        header('Content-Type: application/json');
        $dataModel->corsHeader();
        echo json_encode($dataModel->getMessages($path));
        die();
    }

    public function add(){

    	$dataModel = new \app\models\CommentModel;
    	
        $path=isset($_POST['path'])?$_POST['path']:null;

        $returnCode=$dataModel->saveMessage();
        
    	if($returnCode===true){
    		header('Location: '.$path);
    	}else{
    		header('Location: '.$path.'?status='.$returnCode);
    	}
    	exit;
    }
}
