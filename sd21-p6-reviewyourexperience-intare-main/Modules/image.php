<?php
// Globale $pdo variabele wordt gebruikt
function checkImage($carId){
    global $pdo;
    // Haalt alle informatie op uit de foto tabel waar de auto_id hetzelfde is als de meegegeven $carId
    $check = $pdo->query("SELECT * FROM `foto` WHERE `auto_id` =  '$carId' ")->fetchAll(PDO::FETCH_CLASS, 'image');
    return $check;
    // Geeft de opgehaalde informatie terug
}
    
function getImage(int $id, string $naam)
{
    try{
        // Globale $pdo variabele wordt gebruikt
        global $pdo;
        // Maakt een Prepare statement aan voor het ophalen van foto's uit de foto tabel
        $images = $pdo->Prepare("SELECT * FROM `foto` WHERE `auto_id` =:auto_id AND `naam` =:naam");
        // Bind de meegegeven $id aan de :auto_id parameter in het Prepare statement
        $images->bindValue(":auto_id", $id);
        // Bind de meegegeven $naam aan de :naam parameter in het Prepare statement
        $images->bindValue(":naam", $naam);
        // Voert het Prepare statement uit
        $images->execute();
        // Haalt de opgehaalde informatie op en geeft deze terug in de vorm van een 'image' object
        $image = $images->fetchAll(PDO::FETCH_CLASS, 'image');
        return $image;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function addImage( $id, $image){
    global $pdo; $pdo->query("UPDATE `user` SET `foto`='$image' WHERE `id` = $id");
}
//Deze functie voert een query uit die de foto van de gebruiker met het opgegeven ID in de database updatet naar de opgegeven afbeelding.
function fileUploadCar($merkName,$name, $imgName){

        $carName = strtolower($name);
        // zet de waarde van de variabele $name in kleine letters in de variabele $carName.
        $carName = str_replace(" ", "-",$carName);
        //De functie str_replace vervangt " " (spaties) met "-" in de variabele $carName.
        $fileName = $_FILES["$imgName"]["name"];
        //Het haalt de bestandsnaam op van de geüploade afbeelding die aangeduid wordt met de variabele $imgName.
        $tempName = $_FILES["$imgName"]["tmp_name"];
        // haalt de tijdelijke bestandsnaam op van de geüploade afbeelding.
        $path = getcwd()."/img/".$merkName."/".$carName;
        //$path is de locatie waar de afbeelding opgeslagen zal worden.

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        // controleert of de opgegeven map ($path) bestaat en maakt deze aan indien deze nog niet bestaat.
        $folder = getcwd()."/img/".$merkName."/".$carName."/auto.png";
        //definieert de locatie waar de geüploade afbeelding zal worden opgeslagen als een variabele genaamd $folder.
        $extensions = array("jpeg", "jpg", "png");
        $explode = explode('.', "$fileName");
        // gebruikt de explode functie om de bestandsnaam te splitsen op basis van de punt, en slaat het resultaat op in een array genaamd $explode.
        $file_ext = strtolower(end($explode));
        // haalt de extensie van de bestandsnaam op.

        if(in_array($file_ext,$extensions) || exif_imagetype($tempName)){
            move_uploaded_file($tempName, $folder);
        }
        //Deze if-statement controleert of de extensie van het geüploade bestand in de array $extensions aanwezig is of dat het een geldig afbeeldingsbestand is met behulp van exif_imagetype() en als dat zo is, wordt het bestand verplaatst naar de specifieke map $folder.
}

function fileUploadProfile($userId){
    $fileName = $_FILES["file"]["name"]; //geeft de naam van het bestand terug.
    $tempName = $_FILES["file"]["tmp_name"]; //geeft de tijdelijke locatie van het bestand op de server terug.
    $folder = getcwd()."/img/user/user".$userId.".png"; //$folder geeft de bestemmingslocatie van het bestand aan waar het bestand wordt opgeslagen.
    $image = "user".$userId; //$image geeft een string "user" gevolgd door de userId waardoor het bestand uniek wordt genoemd.

    $extensions = array("jpeg", "jpg", "png"); //maakt een array met de toegestane bestandsextensies.
    $explode = explode('.', "$fileName"); //gebruikt de functie explode() om de string $fileName te splitsen op de punt en het resultaat op te slaan in de $explode variabele.
    $file_ext = strtolower(end($explode));//gebruikt de functie end() om het laatste element van de $explode
    // array te krijgen, en de functie strtolower() om het naar kleine letters te maken. Hiermee krijg je de extensie van het bestand.

    if(in_array($file_ext,$extensions) || exif_imagetype($tempName)){

        move_uploaded_file($tempName, $folder);

        addImage($userId, $image);
    }else{
        $img = "Upload een afbeelding";
    }
}
//fileUploadProfile($userId) upload een profielafbeelding voor een gebruiker met een bepaald id.



