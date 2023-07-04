<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Modules/tekst.php';
require '../Modules/image.php';
require '../Modules/user.php';



session_start();


//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
//print_r($request);
$title = "Intare";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {
	


	
	case 'about':
		$titleSuffix = ' | '.$params[1];
		include_once "../Templates/about.php";
		break;
	
	case 'merk':
		$titleSuffix = ' | '.$params[1];
        $merkId = intval($params[2]);
		include_once "../Templates/merk.php";
		break;


    case 'porsche':
        $titleSuffix = ' | '.$params[1];
        $autoId = $params[3];
        $merkId = $params[2];
        include_once "../Templates/porsche.php";
        break;



    case 'bmw':
        $titleSuffix = ' | '.$params[1];
        $autoId = $params[3];
        $merkId = $params[2];
        include_once "../Templates/bmw.php";
        break;





    case 'audi':
        $titleSuffix = ' | '.$params[1];
        $autoId = $params[3];
        $merkId = $params[2];
        include_once "../Templates/audi.php";
        break;


    case 'mercedes':
        $titleSuffix = ' | '.$params[1];
        $autoId = $params[3];
        $merkId = $params[2];
        include_once "../Templates/mercedes.php";
        break;

	case 'update' :
		$titleSuffix = ' | update';
		$update = "updateFiets";
		include_once "../Templates/home.php";
		break;
	

	

		
    case 'login':
        $titleSuffix = ' | Login';
		$page = $params[1];
		$checkLogin = "checkLogin";
        include_once "../Templates/login.php";
        break;
	
	case 'registreren':
		$titleSuffix = ' | registeren';
		$page = $params[1];
		$register = "makeRegistration";
		include_once "../Templates/login.php";
		break;
		
		
    case 'logout':
        $titleSuffix = ' | Home';
	    logout();
        include_once "../Templates/home.php";
        break;
	

		

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;




    case 'admin':
        include_once ('admin.php');
        break;

    case 'member':
        include_once ('member.php');
        break;



    case 'profiel':
        $titleSuffix = ' | '.$params[1];
        include_once "../Templates/profile.php";
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







