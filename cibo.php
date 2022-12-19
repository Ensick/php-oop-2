<?php 

include_once __DIR__ . "/prodotto.php";

class Cibo extends Prodotto{

    public $peso;
    public $ingredienti;

    public function __construct(

        String $image,
        String $name,
        Float $price,
        Categoria $category,

        Float $peso,
        String $ingredienti
    ) {

        parent:: __construct(

            $image,
            $name, 
            $price, 
            $category
        );

        $this -> peso = $peso;
        $this -> ingredienti = $ingredienti;

       
        
    }
}


?>