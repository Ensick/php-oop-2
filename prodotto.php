
<?php 

    include __DIR__ . '/categoria.php';

    class Prodotto{

        public $image;
        public $nome;
        public $prezzo;
        public $category;

        public function __construct(

            String $image,
            String $nome,
            Float $prezzo,
            Categoria $category
        ) {

            $this -> image = $image;
            $this -> nome = $nome;
            $this -> prezzo = $prezzo;
            $this -> category = $category;
        }
    }


?>