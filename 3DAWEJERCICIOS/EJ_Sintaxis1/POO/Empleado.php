<?php
class Empleado{

    private $nombre;
    private $sueldo;

    public function inicializar($nom,$sue){
        $this -> nombre = $nom;
        $this -> sueldo= $sue;
    }

    public function pagarimpuestos(){
        if($this->sueldo > 3000){
            return "debes pagar impuestos";
        }else{
            return "NO debes pagar impuestos";
        }                                                               
    }

}


$empleado1= new Empleado();

echo $empleado1->inicializar("Pepe",1500);

echo $empleado1 ->pagarimpuestos();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
