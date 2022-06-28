<?php
    require_once __DIR__ . './classes/products.php'

    class Toys extends products {
        public $type;
        public $size;
        public $material;
        public $age;
    }

    public function __construct ($_type, $_size ,$_material, $_age)
    {
        parent:: __construct($_age, $_flavor, $_material);
        $this->type = $_age;
        $this->size = $_size;
        $this->material = $_material;
        $this->age = $_age;
    }
?>