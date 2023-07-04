<?php

global $params;

//check if user has role admin
if (!isAdmin()) {
    logout();
    header ("location:/home");
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {



        case 'table':
            $titleSuffix = ' | '.$params[2];
            include_once "../Templates/table.php";
            break;
            //De case 'table' verandert de waarde van de variabele $titleSuffix naar '| table' en includeert vervolgens het bestand
            // '../Templates/table.php' en stopt vervolgens met uitvoeren van de switch-statement.

        case 'profiel':
            $titleSuffix = ' | '.$params[2];
            include_once "../Templates/profile.php";
            break;
            //"Includeert de 'profile.php' pagina en geeft de pagina de titel ' | profiel'"


        case 'add':
            $titleSuffix = ' | insert';
            include_once "../Templates/addCar.php";
            break;
        //Deze case zorgt ervoor dat de pagina 'addCar.php' wordt ingeladen met de titel ' | insert' wanneer de gebruiker 'add' in de URL invoert.


        default:
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
            //De default case laadt de "home.php" template in en geeft de pagina de titel "Home".
    }
}