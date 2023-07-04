<?php
    
    class image
    {
        public $id;
        public $naam;
        public $foto;
        public $auto_id;
    
        public function __construct()
        {
            settype($this->id, 'integer');
            settype($this->auto_id, 'integer');
        }
    }
    
    