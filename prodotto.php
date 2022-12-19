
<?php 

    include_once __DIR__ . "/categoria.php";

    class Prodotto{

        public $image;
        public $name;
        public $price;
        public $category;

        public function __construct( String $image, String $name, Float $price, Categoria $category){

            $this -> image = $image;
            $this -> name = $name;
            $this -> price = $price;
            $this -> category = $category;
        }
    }

    
?>