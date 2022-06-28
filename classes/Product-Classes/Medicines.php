<?php
    require_once __DIR__ . './classes/products.php'

    class Medicines extends products {
       public $type;
       public $expirationDate;
    }

    public function __construct ($_type, $_expirationDate)
    {
        parent:: __construct($_age, $_flavor, $_material);
        $this->type = $_age;
        $this->expirationDate = $_expirationDate;

    }
?>