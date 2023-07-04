<?php


class Category
{
    public $id;
    public $naam;
    public $foto;
    public $text;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}