<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
	 
	 include_once 'Bicicleta.php';
         include_once 'Coche.php';
			 
                // Bicicleta con 5 marchas
		 $miBici = new Bicicleta("5");
			 
                // 2k cc
		 $miCoche = new Coche(2000);
			 
                 $miBici->recorre(15); //15kms
                 $miCoche->recorre(100); //100kms
		 echo $miBici->hazCaballito()."<br>";
                 echo $miBici->tocaElTimbre()."<br>";
		 echo $miCoche->quemaRueda()."<br>";
		 $miBici->recorre(20); //20kms
		 echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
		 echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";
		 echo "Se han creado un total de ". Vehiculo::getVehiculosCreados()." vehículos<br>";
		 echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>";
	?>
    </body>
</html>
