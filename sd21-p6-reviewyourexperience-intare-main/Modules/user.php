<?php

function getUser(int $id){
    global $pdo;
    $getUser = $pdo->prepare("SELECT * FROM `user` WHERE `id` = :id");

    $getUser->bindValue(":id", $id);
    $getUser->execute();
    return  $getUser->fetchAll(PDO::FETCH_CLASS, "User");
}
//Deze functie haalt een gebruiker op uit de database aan de hand van een gegeven id.
function updateUserInfo($userId){


    global $pdo;

    if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"])){
        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);




        if($email && !empty($_POST["pwd"]) && !empty($_POST["newPwd"])){
            $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
            $newPwd = filter_input(INPUT_POST, "newPwd", FILTER_SANITIZE_SPECIAL_CHARS);

            $getUserInfo = getUser($userId)[0];
            $pwdCheck = password_verify($pwd, $getUserInfo->wachtwoord);

            if($pwdCheck){
                $newPwd =  password_hash($newPwd, PASSWORD_DEFAULT);
                $pdo->query("UPDATE `user` SET `voornaam`='$fname',`achternaam`='$lname',`email`='$email',`wachtwoord`='$newPwd' WHERE `id` = '$userId'");
                $getUserInfo = getUser($userId)[0];
                $_SESSION["fname"]  = $getUserInfo->voornaam;
                $_SESSION["lname"] = $getUserInfo->achternaam;
            }


        }elseif($email){
            $pdo->query("UPDATE `user` SET `voornaam`='$fname',`achternaam`='$lname',`email`='$email' WHERE `id` = '$userId'");
            $getUserInfo = getUser($userId)[0];
            $_SESSION["fname"]  = $getUserInfo->voornaam;
            $_SESSION["lname"] = $getUserInfo->achternaam;
        }
    }elseif (!empty($_POST["pwd"]) && !empty($_POST["newPwd"])){
        $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
        $newPwd = filter_input(INPUT_POST, "newPwd", FILTER_SANITIZE_SPECIAL_CHARS);
        $getUserInfo = getUser($userId)[0];
        $pwdCheck = password_verify($pwd, $getUserInfo->wachtwoord);

        if($pwdCheck){
            $newPwd =  password_hash($newPwd, PASSWORD_DEFAULT);
            $pdo->query("UPDATE `user` SET `wachtwoord`='$newPwd' WHERE `id` = '$userId'");
        }
    }
}

function updateAdressInfo($userId){

    if(!empty($_POST["woonplaats"]) && !empty($_POST["huisnummer"]) && !empty($_POST["postcode"]) && !empty($_POST["stad"])){
        $streetName = filter_input(INPUT_POST, "woonplaats", FILTER_SANITIZE_SPECIAL_CHARS);
        $houseNumber = filter_input(INPUT_POST, "huisnummer", FILTER_SANITIZE_SPECIAL_CHARS);
        $postCode = filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, "stad", FILTER_SANITIZE_SPECIAL_CHARS);


        global $pdo;

        $pdo->query("UPDATE `user` SET `woonplaats`='$streetName',`huisnummer`='$houseNumber',`postcode`='$postCode',`stad`='$city' WHERE `id`= '$userId'");
    }
}


function ColCountReview($CarId){
    global $pdo;
    $reviewCount = $pdo->query("SELECT * FROM `review` where auto_id = $CarId")->rowCount();

    return $reviewCount;
}
//Deze functie telt het aantal rijen in de tabel 'review' waarbij de kolom 'auto_id' gelijk is aan de meegegeven variabele $CarId.

function getAllReviews($offset,$rowCount,$autoId){
    global $pdo;
    $reviews = $pdo->query("SELECT * FROM `review`  WHERE `auto_id` = $autoId ORDER BY datum ASC LIMIT $offset, $rowCount ")->fetchAll(PDO::FETCH_CLASS, 'Review');

    return $reviews;
}
//Deze functie haalt alle reviews op van een specifieke auto, begonnen bij een bepaalde offset en een bepaald aantal rijen, gesorteerd op datum in oplopende volgorde.
function addReview($userId, $carId){
    global $pdo;

    if(!empty($_POST["star"]) && !empty($_POST["review"])) {

        $stars = filter_input(INPUT_POST, "star", FILTER_VALIDATE_INT);

        $review = filter_input(INPUT_POST, "review", FILTER_SANITIZE_SPECIAL_CHARS);

        $getReview = $pdo->query("SELECT * FROM `review` WHERE user_id = $userId AND auto_id = $carId")->fetchAll(PDO::FETCH_CLASS, 'Review');
        if ($stars && $stars <= 5 && $stars >= 1 && strlen($review) <= 120 && !$getReview) {
            $pdo->query("INSERT INTO `review`( `user_id`, `review`, `stars`, `auto_id`) VALUES ('$userId','$review','$stars','$carId')");
        }
    }

}
//Deze functie voegt een review toe aan een auto door een gebruiker id, auto id, aantal sterren en de review zelf te verkrijgen uit een formulier, te valideren en te saniteren, en vervolgens toe te voegen aan de database als de ingevoerde gegevens geldig zijn.