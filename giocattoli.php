
<?php 

include_once __DIR__ . "/prodotto.php";

class Giocattoli extends Prodotto{

    public $caratteristiche;
    public $dimensioni;

    public function __construct(

        String $image,
        String $name,
        Float $price,
        Categoria $category,

        String $caratteristiche,
        String $dimensioni
    ) {

        $this -> caratteristiche = $caratteristiche;
        $this -> dimensioni = $dimensioni;

        parent:: __construct(

            $image,
            $name, 
            $price, 
            $category
        );
    }

}


?>