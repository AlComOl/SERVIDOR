<?php
// EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. 
// Cambia la constante por una variable estática sueldoTope, de manera que mediante getter/setter 
// puedas modificar su valor.
class Empleado{

    private static int $sueldoTope = 0;

    public function __construct(private string $nom,private string $apell, private int $sue){

    }

    function getSueldoTope():int{
      return self::$sueldoTope;
    }

    function setSueldoTope(int $sueTope):int{
      self::$sueldoTope = $sueTope;
      return $sueTope;
    }

      function getNombreCompleto(){
        return  "El nombre del empleado {$this-> nom} y el apellido {$this->apell} y tiene un sueldo de {$this ->sue}";
    
     }

    function debePagarImpuestos(): string{

            if($this->sue > self::$sueldoTope){

                  return "Debe pagar impuestos";
            }else{
                  return "No debe pagar impuestos";
            }
          

        }

      }

    

   
    




$pers1=new Empleado('jose','martinez',5222);

echo $pers1 -> getNombreCompleto();

echo"<br>";

echo  $pers1 -> getSueldoTope();

echo"<br>";


echo $pers1 -> setSueldoTope(3000);


echo"<br>";


echo $pers1 -> debePagarImpuestos();


?>