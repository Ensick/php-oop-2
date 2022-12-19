<?php 

include_once __DIR__ . "/categoria.php";
include_once __DIR__ . "/prodotto.php";
include_once __DIR__ . "/cibo.php";
include_once __DIR__ . "/giocattoli.php";
include_once __DIR__ . '/accessori.php'; 



$arrayCategorie = [

    'category1' => new Categoria('cane','<i class="fa-solid fa-dog"></i>'),
    'category2' => new Categoria('gatto','<i class="fa-solid fa-cat"></i>'),
    'category3' => new Categoria('uccello','<i class="fa-solid fa-dove"></i>'),
];
 
/* var_dump($arrayCategorie); */

$arrayProdotti = [

    new Cibo('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUYW01SzFYWP6croJE10aF9btA4NImmNcauQ&usqp=CAU','Royal Canin','19.99',$arrayCategorie['category1'],12,'proscutto e riso'),
    new Cibo('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs1oneRXsYQYGGB8cMPRDLt5RkK1aJc4Yxfb6uEN5P8Llc1kZNDd36TahvikFdEk_Na1k&usqp=CAU','Almo Nature','24.99',$arrayCategorie['category1'],14,'manzo e cereali'),
    new Accessori('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlgZcR9e3ecLZMHWwsXy0sykMDKDBiTX0A-r6b8GYG7pjmGJJWn3RlM_3831L-CO7h-mM&usqp=CAU','Voliera Ferplast Bella Casa','184.99',$arrayCategorie['category3'],'Legno','83 x 67 x 153cm'),
    new Giocattoli('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStqpfPR7KRKOCmxvUGaW8YI68UcHWTMKM5J_rH5b3yg1Ubf5DdUBvLaHeQPeq69SLC-2A&usqp=CAU','Topini Di Peluche Trixie','4.99',$arrayCategorie['category2'],'morbido con una codina in corda','8,5cm x 10cm')

];

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        <link rel='stylesheet' href='./style.css'>
    </head>
    <body>

        <main>

            <section>

                <?php 

                    foreach($arrayProdotti as $prodotto){

                        echo '<div>';
                        echo '<img src="'.$prodotto -> image.'" alt="img">';
                        echo '<h3>'.$prodotto -> name.'</h3>';
                        echo '<span>'.$prodotto -> price.'</span>';
                        echo '<div>'.$prodotto -> category -> icon.$prodotto -> category -> name.'</div>';

                        if ($prodotto instanceof Cibo) {

                            echo '<span>'.$prodotto-> peso .'</span>';
                            echo '<span>'.$prodotto-> ingredienti .'</span>';
            
                        } elseif ($prodotto instanceof Accessori) {
            
                            echo '<span>'.$prodotto-> materiale . '</span>';
                            echo '<span>'.$prodotto-> dimensioni . '</span>';
            
            
                        } elseif ($prodotto instanceof Giocattoli) {
            
                            echo '<span>'.$prodotto-> caratteristiche . '</span>';
                            echo '<span>'.$prodotto-> dimensioni . '</span>';
                        }
                        echo '</div>';

                    }

                ?>

                
            </section>

        </main>

    

      
    </body>
</html>