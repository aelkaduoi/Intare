<?php

function checkLogin()
{
    global $pdo;
		$getUser = $pdo->prepare("SELECT * FROM `user` WHERE `email` = :email");
		if (isset($_POST["submit"])) {
			
			if (!empty($_POST["pwd"])) {
				$email = $_SESSION["email"] = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
				$pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
				if (!$email) {
					global $mail;
					$mail = "hello";
					
				} else {
					$getUser->bindValue(":email", $email);
					$getUser->execute();
					$user = $getUser->fetch(PDO::FETCH_ASSOC);



                    


					if (!$user) {
						global $mail;
						 $mail = "hello";
					} else {
						if (password_verify($pwd, $user["wachtwoord"])) {
                            $_SESSION["userId"] = $user["id"];
							$_SESSION["admin"] = $user["admin"];
                            $_SESSION["fname"]  = $user["voornaam"];
                            $_SESSION["lname"] = $user["achternaam"];
							$_SESSION["login"] = true;

                            if($_SESSION["admin"]){
                                $_SESSION["user"] = "admin";
                                header("location: /admin/home");
                            }else{
                                $_SESSION["user"] = "member";
                                header("location: /member/home");
                            }

						} else {
							global $password;
							$password = "hello";
						}
					}
				}
			}
		}
	

}

function isAdmin():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user == "admin")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function isMember():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user == "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function makeRegistration()
{
	global $pdo;
	$getUser = $pdo->prepare("SELECT `email`, `wachtwoord`, `admin` FROM `user` WHERE `email` = :email");
	$insertUser = $pdo->prepare("INSERT INTO `user`(`voornaam`, `achternaam`, `email`, `wachtwoord` ,`admin`) VALUES (:voornaam,:achternaam,:email,:wachtwoord, :admin)");
	if (isset($_POST["submit"])) {
		
		if(!empty($_POST["lname"]) & !empty($_POST["fname"]) & !empty($_POST["email"]) & !empty($_POST["pwd"]) ) {
			$lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
			$fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
			$email  = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
			$pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
			$pwd =  password_hash($pwd, PASSWORD_DEFAULT);
			if (!$email) {
				global $mail;
				$mail = "hello";
				
			} else {
				
				$getUser->bindValue(":email", $email);
				$getUser->execute();
				$user = $getUser->fetch(PDO::FETCH_ASSOC);
				
				if (!$user) {

                    echo $email;
					try{
					$insertUser->bindValue(":voornaam", $fname);
					$insertUser->bindValue(":achternaam", $lname);
					$insertUser->bindValue(":email", $email);
					$insertUser->bindValue(":wachtwoord", $pwd);
					$insertUser->bindValue(":admin", 0);
					$insertUser->execute();
						$_SESSION["admin"] = 0;
						$_SESSION["lname"] = $lname;
                        $_SESSION["fname"] = $fname;
						$_SESSION["login"] = true;


                        $dbUser = $pdo->prepare("SELECT * FROM `user` WHERE `email` =:email ");
                        $dbUser->bindValue(":email", $email);
                        $dbUser->execute();

                        $getDbUser = $dbUser->fetchAll(PDO::FETCH_CLASS, "User");

                        $_SESSION["userId"] = $getDbUser[0]->id;
                        echo  $_SESSION["userId"] ;

                        $_SESSION["user"] = "member";
                        header("location: /member/");

				} catch (\PDOException $e) {
					echo ($e->getMessage());
				}
				} else {
					$mail = "E-mail is al gekoppeld aan een account";
					echo $mail;
					

				}
			}
		}
	}
	
}
	

