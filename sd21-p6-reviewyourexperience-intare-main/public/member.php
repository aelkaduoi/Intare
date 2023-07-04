<?php
global $params;
//$params[2] is de action en $params[3] een getal die de action nodig heeft
//check if user has role admin
if (!isMember()) {
    logout();
    header ("location:/home");
} else {

    switch ($params[2]) {
        case 'profiel':
            $titleSuffix = ' | '.$params[2];
            include_once "../Templates/profile.php";
            break;
        default:
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
    }
}