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
            array('POST', '/api/support', 'apiController@add'),

        ];

        return $this->routes;

    }

}
