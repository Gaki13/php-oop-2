<?php 
    require_once __DIR__ . './classes/user.php';

    class LogedUser extends user {
        public $discount;

        public function __construct ($_discount)
        {
            parent:: __construct($_discount);
            $this->discount = $_discount;
        }
    }
?>