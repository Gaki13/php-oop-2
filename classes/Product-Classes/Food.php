<?php
    require_once __DIR__ . './classes/products.php'

    class Food extends products {
        $age;
        $flavor;
        $dateOfExpirence;
        $weight;
    }

    public function __construct ($_age, $_flavor ,$_dateOfExpirence, $_weight)
    {
        parent:: __construct($_age, $_flavor, $_dateOfExpirence, $_weight );
        $this->age = $_age;
        $this->flavor = $_flavor;
        $this->dateOfExpirence = $_dateOfExpirence;
        $this->weight = $_weight;
    }
?>