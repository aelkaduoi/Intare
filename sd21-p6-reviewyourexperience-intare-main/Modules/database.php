<?php

// Variabelen instellen voor de databaseverbinding
$host = '127.0.0.1';
$db   = 'intare';
$user = 'root';
$pass = '';
$charset = 'utf8mb4'; // Tekenset voor de verbinding

// De DSN (gegevensbronnaam) voor de verbinding maken
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Instellen van opties voor de PDO-verbinding
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Gooi uitzonderingen op fouten
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS, // Haal rijen op als objecten van een klasse
    PDO::ATTR_EMULATE_PREPARES   => false, // Gebruik native voorbereide instructies
];

// Probeer een nieuwe PDO-verbinding te maken met de opgegeven DSN, gebruikersnaam, wachtwoord en opties
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    include_once ('../Classes/Category.php');
    include_once ('../Classes/Product.php');
    include_once ('../Classes/Review.php');
    include_once ('../Classes/User.php');
    include_once ('../Classes/Car.php');
    include_once ('../Classes/image.php');
    include_once ('../Classes/tekst.php');
} catch (\PDOException $e) {
// Als er een uitzondering wordt gegenereerd, maakt u een nieuwe uitzondering met het bericht en de code van de gevangen uitzondering
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
