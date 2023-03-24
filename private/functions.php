<?php
    function url_for($scriptPath) : String
    {
        if($scriptPath[0] !== '/')
        {
            $scriptPath = "/" . $scriptPath;
        }

        return WWW_ROOT . $scriptPath;
    }

