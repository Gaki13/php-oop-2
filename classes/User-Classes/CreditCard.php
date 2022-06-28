<?php 
    require_once __DIR__ . './classes/user.php';

    class CreditCard extends user {
        public $number;
        public $expireDate;
        public $name;
        public $surname;
        public $cvc;

        public function __construct ($_number, $_expireDate, $_name, $_surname, $_cvc)
        {
            parent:: __construct($_number, $_expireDate, $_name, $_surname, $_cvc);
            $this->number = $_number;
            $this->expireDate = $_expireDate;
            $this->name = $_name;
            $this->surname = $_surname;
            $this->cvc = $_cvc;

        }

        public function __cvcControl($_cvc)
        {
            if($_cvc == .date("d/m/Y")){
                die;
            }
        }
    }
?>