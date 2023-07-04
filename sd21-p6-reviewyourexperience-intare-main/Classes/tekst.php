<?php
    
    class tekst
    {
        public $id;
        public $naam;
        public $tekst;
        public $titel;
        public $auto_id;
    
        public function __construct()
        {
            settype($this->id, 'integer');
            settype($this->auto_id, 'integer');
        }
    }