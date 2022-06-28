<?php
    require_once __DIR__ . './classes/products.php'

    class DogHouse extends products {
       public $type;
       public $size;
       public $material;

    }

    public function __construct ($_type, $_size ,$_material)
    {
        parent:: __construct($_age, $_flavor, $_material);
        $this->type = $_age;
        $this->size = $_size;
        $this->material = $_material;
    }
?>