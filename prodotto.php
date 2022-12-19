
<?php 

    include __DIR__ . '/categoria.php';
    include __DIR__ . '/cibo.php';
    include __DIR__ . '/accessori.php';
    include __DIR__ . '/giocattoli.php';

    class Prodotto{

        public $image;
        public $name;
        public $price;
        public $category;

        public function __construct(

            String $image,
            String $name,
            Float $price,
            Categoria $category
        ) {

            $this -> image = $image;
            $this -> name = $name;
            $this -> price = $price;
            $this -> category = $category;
        }
    }

    


?>