<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <title> Ejercicio01~ </title>
    </head>
    <body>
        <?php
        
         include_once 'Pinguino.php';
         include_once 'Gato.php';
         include_once 'Perro.php';
         include_once 'Lagarto.php';
 
            $garfield = new Gato("macho", "romano");
            $rasca = new Gato("macho");
            $lisa = new Gato("hembra");
            $silvestre = new Gato();
            
            echo 'Garfield --> ';
            echo '\t' .$garfield ."<hr>";;
            
            echo 'Rasca --> ';
            echo $rasca ."<hr>";;
            
            echo 'Lisa --> ';
            echo $lisa ."<hr>";
            
            echo 'Silvestre --> ';
            echo $silvestre ."<hr>";
            
            ?> <b> Pingu </b> <br> <?php
           $pingu = new Pinguino("hembra");
            echo $pingu->aseate()."<br>";
            echo $pingu->vuela()."<br>";
            echo $pingu->come("anchoas")."<br>";
            echo $pingu->nada()."<br><br><hr>";
             
            
            ?> <b> Mi pajara </b> <br> <?php
          $miPajaro = new Ave("hembra");
           echo $miPajaro->aseate()."<br>";
           echo $miPajaro->vuela()."<br>";
           echo $miPajaro->PonHuevos()."<br><br><hr>";
           
           
           ?> <b> Viper </b> </br> <?php
           $godzilla = new Lagarto("macho");
            echo $godzilla->tomaElSol()."<br>";
            echo $godzilla->Repta()."<br>";
            echo $godzilla->duerme()."<br><hr>";
            
            
            ?> <b> Rex </b> </br> <?php 
           $Rex = new Perro("macho", "Pastor Alemán");
            echo $Rex->duerme()."<br>";
            echo $Rex->dameLaPata()."<br>";
            echo $Rex->ladra()."<br>";
            echo $Rex->caza()."<br><hr>";

        ?>
    </body>
</html>