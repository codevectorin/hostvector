<?php

namespace app\routes;

class Routes
{
    public function setRoutes()
    {
        $this->routes = [
            
        	array('GET', '/', 'index@showPage'),
        	array('GET', '/[*:page].html', 'index@showPage'),

            /* Comments */
            array('POST', '/support/add', 'commentsController@add'),

        ];

        return $this->routes;

    }

}
