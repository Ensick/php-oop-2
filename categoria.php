<?php 

class Category{

    public $name;
    public $icon;

    public function __construct(

        String $name,
        String $icon

    ) {

        $this -> name = $name;
        $this -> icon = $icon;

    }

}

$category1 = new Category('cane','fa-solid fa-dog');
$category2 = new Category('gatto','fa-solid fa-cat');
$category3 = new Category('uccello','fa-solid fa-dove');

?>