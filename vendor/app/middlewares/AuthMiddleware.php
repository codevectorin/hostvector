<?php

namespace app\middlewares;

use \system\middlewares\Middleware;

/**
 *
 */
class AuthMiddleware extends Middleware
{

    public function check()
    {
        session_start();
        session_name('CODEVECTORIN_APPSESSION');

        if (session_status() == PHP_SESSION_NONE) {

            session_start();

        }

        if (isset($_SESSION["dashboard"]['loggedIn']) && $_SESSION["dashboard"]['loggedIn'] === true) {
            return true;

        } else {

            return false;
        }
    }
}
