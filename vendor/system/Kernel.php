<?php
/**
* Author: Vinay Khobragade
* Package: Surface Kernel
* Contact me for fixes and suggestions
*/

namespace system;


class Kernel
{


	//This is main Kernel Layer of Surface Framework


	public function __construct()
	{
		//Kernel Connected
		$this->router = new \AltoRouter();
		$routes = new \app\routes\Routes;
		$this->routes = $routes->setRoutes();
		$this->router->addRoutes($this->routes);

		$this->routerMatch = $this->router->match();

        if( $this->routerMatch ) {
           
            $names=explode('@',$this->routerMatch['target']);
			
			$this->runTheController($this->routerMatch['target'],$this->routerMatch['params']);
			

        } else {
        	$new=new controllers\Controller();
            return $new->view('error_404.tpl');
        }		
	}

	private function runTheController($string, $params=array())
	{
		$names=explode('@',$this->routerMatch['target']);
		$controllerName=str_replace(array('/','\\','@'),'\\',$names[0]); //Controller Name
		$methodName = $names[1]; //Method Name

		$objectName = '\app\controllers\\'.$controllerName;
		
		if(method_exists($objectName, $methodName)) {
			$object = new $objectName;
			//Run Middleware if any before controller
			
			if(isset($this->routerMatch['middleware']) && $this->routerMatch['middleware']!=null) {

				$object->middleware($this->routerMatch['middleware']);
			}
			
			$object->{$methodName}($params);
		}
	}

	public function getControllerName($string)
	{
		$controllerName = explode('@', $string)[0];
		return $controllerName;
	}

	public function getMethodName($string)
	{
		$methodName = explode('@', $string)[1];
		return $methodName;
	}


	public function getUriSegment($int=0)
	{
		if(isset(explode('/', trim(str_replace('?'.$_SERVER['QUERY_STRING'], null, $_SERVER['REQUEST_URI']), '/'))[$int]))
		{
			return explode('/', trim(str_replace('?'.$_SERVER['QUERY_STRING'], null, $_SERVER['REQUEST_URI']), '/'))[$int];
		}
		else return null;
	}
		
}
