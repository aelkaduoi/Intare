<?php
function getCategories():array
{
    global $pdo;
    $categories = $pdo->query("SELECT * FROM `merken` ORDER BY naam ASC")->fetchAll(PDO::FETCH_CLASS, 'Category');

    return $categories;
}
//De functie getCategories() haalt alle categorieën uit de tabel "merken" in de database en sorteert deze op naam, en retourneert de resultaten als een array.
// ASC betekend oplopend
function getMerk(int $id)
{


    try{
    global $pdo;
    $merken = $pdo->Prepare("SELECT * FROM `merken` WHERE `id` =:id");
    $merken->bindValue(":id", $id);
    $merken->execute();
    $kijken = $merken->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $kijken;
} catch (PDOException $e) {
    die($e->getMessage());
}
}
//De functie getMerk(int $id) haalt één specifiek merk uit de tabel "merken" op basis van een gegeven id en retourneert de resultaten als een array.



function getCars(int $id):array
{
    try{
    global $pdo;
    $cars = $pdo->prepare('SELECT * FROM `auto` WHERE `merk_fk`=:merk_fk ORDER BY naam ASC');

    $cars->bindValue(":merk_fk", $id);
    $cars->execute();
    $car = $cars->fetchAll(PDO::FETCH_CLASS, "Car");


    return $car;
    } catch (PDOException $e) {
        die($e->getMessage());
    }



}
//De functie getCars(int $id) haalt alle auto's op basis van een gegeven merk_fk (foreign key) uit de tabel "auto" en retourneert de resultaten als een array.
    
    function getCar(int $id):array
    {
        try{
            global $pdo;
            $cars = $pdo->prepare('SELECT * FROM `auto` WHERE `id`=:id  ');
            
            $cars->bindValue(":id", $id);
            $cars->execute();
            $car = $cars->fetchAll(PDO::FETCH_CLASS, "Car");
            
            return $car;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
//De functie getCar(int $id) haalt één specifieke auto op basis van een gegeven id uit de tabel "auto" en retourneert de resultaten als een array.
function getAllCars($offset, $rowCount):array
{
    global $pdo;
    $cars = $pdo->query("SELECT * FROM `auto` ORDER BY naam ASC LIMIT $offset, $rowCount ")->fetchAll(PDO::FETCH_CLASS, 'Category');

    return $cars;
}
//De functie getAllCars($offset, $rowCount) haalt alle auto's uit de tabel "auto" en retourneert de resultaten als een array.


function colCount():int{
    global $pdo;
    $cars = $pdo->query("SELECT * FROM `auto`")->rowCount();

    return $cars;
}
//De functie colCount() telt het aantal rijen in de tabel "auto" en retourneert het als een int.

function updateCar(){

    $name = filter_input(INPUT_POST, "carName", FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_input(INPUT_POST, "carPrice", FILTER_VALIDATE_FLOAT);
    $speed = filter_input(INPUT_POST, "carSpeed", FILTER_VALIDATE_INT);
    $acc = filter_input(INPUT_POST, "carAcc", FILTER_VALIDATE_FLOAT);
    $pk = filter_input(INPUT_POST, "carPk", FILTER_VALIDATE_INT);
    $autoId = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    global $pdo;
    if($price && $speed && $acc && $pk && $autoId){
        $pdo->query("UPDATE `auto` SET `naam`='$name',`prijs`='$price',`top_snelheid`='$speed',`acceleratie`='$acc',`vermogen`='$pk' WHERE `id`  = '$autoId'");
    }else{
        global $message;

        $message = "excusses er ging iets fout";
        return $message;
    }
}
//De functie updateCar() wordt gebruikt om een specifieke auto in de tabel "auto" te updaten op basis van gegeven informatie uit een formulier.

function deleteCar($id){
    global $pdo;

    $pdo->query("DELETE FROM `foto` WHERE `auto_id` = $id ");
    $pdo->query("DELETE FROM `tekst` WHERE `auto_id` = $id ");
    $pdo->query("DELETE FROM `review` WHERE `auto_id` = $id ");
    $pdo->query("DELETE FROM `auto` WHERE `id` = $id ");
}
//De functie deleteCar($id) wordt gebruikt om een specifieke auto en bijbehorende foto's en tekst uit de tabellen "auto", "foto" en "tekst" te verwijderen op basis van een gegeven id.
function insertMerk($name, $text, $img){
    global $pdo;
    $pdo->query("INSERT INTO `merken`( `naam`, `text`, `foto`) VALUES ('$name','$text','$img')");
}
//Deze functie voegt een nieuw merk toe aan de tabel "merken" in de database met de gegeven naam, tekst en foto als parameters.

function addCar($foto){
    global $pdo;
    $name = filter_input(INPUT_POST, "addName", FILTER_SANITIZE_SPECIAL_CHARS);
    $merkId = filter_input(INPUT_POST, "merkId", FILTER_VALIDATE_INT);
    $price = filter_input(INPUT_POST, "addPrice", FILTER_VALIDATE_FLOAT);
    $topSpeed = filter_input(INPUT_POST, "addSpeed", FILTER_VALIDATE_INT);
    $acc = filter_input(INPUT_POST, "addAcc", FILTER_VALIDATE_FLOAT);
    $pk = filter_input(INPUT_POST, "addPk", FILTER_VALIDATE_INT);
    if($price && $topSpeed && $acc && $pk && $merkId) {
        echo "test";
        $pdo->query("INSERT INTO `auto`( `naam`, `prijs`, `foto`, `top_snelheid`, `acceleratie`, `vermogen`, `merk_fk`) VALUES ('$name','$price','$foto','$topSpeed','$acc','$pk','$merkId')");
    }else{
        global $message;

        $message = "excusses er ging iets fout";
        return $message;
    }
}
//Deze functie voegt een nieuwe auto toe aan de tabel "auto" in de database met de gegeven informatie uit een formulier en valideert deze informatie met filter_input() voordat deze in de query wordt gebruikt.

