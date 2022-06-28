<?php
    class User {
        public $name;
        public $surname;
        public $mail;
        public $creditCard;
    }

    public function __construct(string $_name, string $_surname, string $_mail, array $_creditCard)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->mail = $_mail;
        $this->creditCard = $_creditCard;
    }
    
    try {
        $creditCard
    }