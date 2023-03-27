<?php

    /**
     * @param $scriptPath
     * @return string
     */
    function url_for(string $scriptPath) : string
    {
        if($scriptPath[0] !== '/')
        {
            $scriptPath = "/" . $scriptPath;
        }

        return WWW_ROOT . $scriptPath;
    }

    /**
     * @return void
     */
    function error_404():void{
        header($_SERVER["SERVER_PROTOCOL"] . " 404 NOT FOUND");
        exit();
    }

    /**
     * @return void
     */
    function error_500():void{
        header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
        exit();
    }

    /**
     * @param string $location
     * @return void
     */
    function redirectTo(string $location):void{
        header('Location: ' . url_for($location));
        exit;
    }

    /**
     * @return bool
     */
    function requestIsPost(): bool{
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    /**
     * @return bool
     */
    function requestIsGet(): bool{
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

