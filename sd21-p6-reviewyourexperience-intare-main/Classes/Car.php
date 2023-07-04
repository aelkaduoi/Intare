<?php


class Car
{


//public = dat het buiten de class gerbuikt kan worden
    public $id;
    public $naam;
    public $prijs;
    public $foto;
    public $top_snelheid;
    public $acceleratie;
    public $vermogen;
    public $merk_fk;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->merk_fk, 'integer');
        settype($this->top_snelheid, 'integer');
        settype($this->vermogen, 'integer');
        settype($this->acceleratie, 'float');
        settype($this->prijs, 'float');

    }


}