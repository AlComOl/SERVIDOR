<!-- EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade una constante SUELDO_TOPE con 
el valor del sueldo que debe pagar impuestos, y modifica el código para utilizar la constante. -->
<?php
class Empleado{

    const SUELDO_TOPE=3333; 

    public function __construct(private string $nom,private string $apell, private int $sue){

    }

      function getNombreCompleto(){
        return  "El nombre del empleado {$this-> nom} y el apellido {$this->apell} y tiene un sueldo de {$this ->sue}";
    
     }

    function debePagarImpuestos(): string{

            if($this->sue > self::SUELDO_TOPE){

                  return "Debe pagar impuestos";
            }else{
                  return "No debe pagar impuestos";
            }
          

        }
}

//el self se aplica para coger una constante 


$pers1=new Empleado('jose','martinez',5222);

echo $pers1 -> getNombreCompleto();

echo $pers1 -> debePagarImpuestos();

?>