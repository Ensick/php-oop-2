<?php 

include_once __DIR__ . "/prodotto.php";

class Accessori extends Prodotto{

    public $materiale;
    public $dimensioni;

    public function __construct(

        String $image,
        String $name,
        Float $price,
        Categoria $category,

        String $materiale,
        String $dimensioni
    ) {

        $this -> materiale = $materiale;
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