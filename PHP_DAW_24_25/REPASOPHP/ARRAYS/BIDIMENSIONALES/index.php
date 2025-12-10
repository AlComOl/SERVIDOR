<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //aray indexado de array asociativos
    $explotacionNorte = [ ["Parcela"=> "101","cultivo" => "kakis", "Edad"=> 7, "Riego"=> "manta", "Distribucion"=>"5x5"],
                         ["Parcela" => "102","cultivo" =>"Naranjas", "Edad"=> 5, "Riego"=> "manta", "Distribucion"=>"5x5"],
                         ["Parcela" => "103","cultivo" =>"Albaricoques", "Edad"=> 2, "Riego"=> "manta", "Distribucion"=>"sin"],
                         ["Parcela" => "104","cultivo" =>"sandias", "Edad"=> 1, "Riego"=> "goteo", "Distribucion"=>"sin"],
                         ["Parcela" => "105","cultivo" =>"melones", "Edad"=> 1, "Riego"=> "goteo", "Distribucion"=>"sin"]  ,
                        ];        
                    //   entre en el array recorre les parceles  
                        foreach($explotacionNorte as $parcela){
                            //dins de les parceles recorre la clave y el valor 
                            foreach($parcela as $clave => $valor){
                                echo "$clave: $valor <br>";
                            }       
                        }
    //array asociativo con los datos por parcela 
    $explotacionSur = array(
        "parcela 101" =>array("Kakis",7,"manta","5x8"),
        "parcela 102" =>array("Kakis",7,"manta","5x8"),
        "parcela 103" =>array("Kakis",7,"manta","5x8"),
        "parcela 104" =>array("Kakis",7,"manta","5x8"),
        "parcela 105" =>array("Kakis",7,"manta","5x8")
    );

    // foreach($explotacionSur as $parcela => $datos){
    //     echo " $parcela .<br>";
    //     foreach($datos as $dato ){
    //         echo "  - $dato <br>";
    //     }
    // }

    //Array Bidimensional

    $cars = array(
        "car1" => array("make" => "Toyota","colour" => "Green","year" => 1999,"engine_cc" => 1998),
        "car2" => array("make" => "BMW","colour" => "RED","year" => 2005,"engine_cc" => 2400),
        "car3" => array("make" => "Renault","colour" => "White","year" => 1993,"engine_cc" => 1395),
     );
    

    //  foreach ($cars as $key => $value) {
    //     foreach($value as $propiedad => $dato){
    //       echo" $propiedad : $dato <br>";
    //     }
    //     echo "<br>";

    //  }


    // Combinando los arrays asociativos en varias dimensiones podemos almacenar la información como si fuera una tabla: 
        
        // $menu1 = ["Plato1" => "Macarrones con queso", "Plato2" => "Pescado asado", "Bebida" => "Coca-Cola", "Postre" => "Helado de vainilla"];
        // $menu2 = ["Plato1" => "Sopa", "Plato2" => "Lomo con patatas", "Bebida" => "Agua", "Postre" => "Arroz con leche"];
        
        // $menus = [$menu1, $menu2]; // creamos un array a partir de arrays asociativos

        // foreach ($menus as $menu) {
        //     echo " Plato <br>";
        //     foreach ($menu as $plato => $comida) {
        //         echo "$plato ; $comida <br>";
        //     }
        //     echo "<br>";
        // }


        //Recorre el Array
        $eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        // Crea un script con PHP que muestre un listado de los nombres de las capitales y sus correspondientes paises. El listado debe ser parecido a:

        // La capital de Neherlands és Amsterdam
        // La capital de Greece és Athens
        // La capital de Germany és Berlin

        foreach($eu as $pais => $ciudad){

           echo "La capital de $pais és $ciudad <br> ";
           echo " <br>";
            
        }
         
        ?>
</body>
</html>