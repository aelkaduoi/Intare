<?php


class Review
{
    public $id;
    public $naam;
    public $datum;
    public $review;
    public $stars;
    public $user_id;
    public $auto_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->auto_id, 'integer');
        settype($this->user_id, 'integer');
    }
}