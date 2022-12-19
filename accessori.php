<?php 

class Accessori extends Prodotto{

    public $materiale;
    public $dimensioni;

    public function __construct(

        String $materiale,
        String $dimensioni
    ) {

        $this -> materiale = $materiale;
        $this -> dimensioni = $dimensioni;
    }

}

?>