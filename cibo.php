<?php 

class Cibo extends Prodotto{

    public $peso;
    public $ingredienti;

    public function __construct(

        Float $peso,
        String $ingredienti
    ) {

        $this -> peso = $peso;
        $this -> ingredienti = $ingredienti;
        
    }
}

?>