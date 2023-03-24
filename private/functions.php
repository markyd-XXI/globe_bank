<?php
    function url_for($scriptPath) : String
    {
        if($scriptPath[0] !== '/')
        {
            $scriptPath = "/" . $scriptPath;
        }

        return WWW_ROOT . $scriptPath;
    }

    function error_404(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 NOT FOUND");
        exit();
    }

    function error_500(){
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        exit();
    }

    function redirectTo($location){
        header('Location: ' . url_for($location));
        exit;
    }

