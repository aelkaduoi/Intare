<?php

class User
{
    public $id;
    public $email;
    public $wachtwoord;
    public $voornaam;
    public $achternaam;

    public $foto;
    public $woonplaats;
    public $huisnummer;
    public $postcode;
    public $stad;
    public $admin;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}