<?php

// Creazione della classe + documentazione block

/**
 * @author Romina Trazzi mymail@posta.it
 * @copyright 2021
 */


class Villa {

    // Dichiarazione delle variabili 

    public $nome;
    public $mq;
    public $num_stanze;
    public $prezzo;

    // Costruzione dell'oggetto con parametri

    public function __construct(string $nome, int $mq, int $num_stanze, int $prezzo) {
        $this -> nome = $nome;
        $this-> mq = $mq;
        $this -> num_stanze = $num_stanze;
        $this -> prezzo = $prezzo;
    }

};

// Variabili a cui viene assegnato un oggetto completo di parametri 

$villa1 = new Villa ('Villa Rosa', 80, 3, 100000 );
$villa2 = new Villa ('Villa Flora', 100, 4, 120000);
$villa3 = new Villa ('Villa Giacinto', 40, 2, 50000);


// Cicliamo all'interno degli attributi di una singola villa

foreach ($villa1 as $key => $value) {
    // echo "$key: $value <br>";
};

// Inseriamo le ville in un array associativo per ciclare all'interno di tutte le ville

$listaVille = [$villa1, $villa2, $villa3];

foreach ($listaVille as $villa) {
    foreach ($villa as $value) {
        // echo $value . "<br>";
    }
};

// Riportiamo il tutto in pagina HTML per stamparlo a schermo

?>


<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--meta properties -->
        <meta name="author" content="Romina Trazzi">
        <meta name="description" content="Esercizio php oop">
        <meta name="keywords" content="php programmazione ad oggetti">
    </head>

    <body>

        <h1>Creazione di una classe</h1>

        <?php 
            
            foreach ($listaVille as /* $index => */ $villa) {
                echo "<div>";
                // echo $index . "<br>";

                foreach ($villa as $key => $value) {
                    echo  $key . ":" . $value . "<br>";
                }
                
                echo "<br></div>";
            }; 

        ?>

    </body>
</html>