<!-- EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. 
Completa el siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada 
(para ello, deberás crear un getter para los teléfonos): -->
<?php

class Empleado{

    private static int $sueldoTope = 0;
    
    private $telefonos=[];

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

    public function anyadirTelefonos($tel):void{
        
            array_push($this->telefonos,$tel);
    }

    

      public function getTelefonos():string{
        $res="";
   
        foreach ($this->telefonos as $telefono) {
            echo"<ol>";
            $res.="<li>$telefono</li>";
        }
        echo"</ol>";
        return $res;
      }

      public static function toHtml(Empleado $emp): string{
        $salida="<p>Los datos del empleado son: " . $emp->nom ." $emp->apell </p>". $emp->getTelefonos();

        return $salida;
      }



    }

    $alvaro = new Empleado('Alvaro','Comenge',3000);

    $alvaro->anyadirTelefonos('679232996');
    $alvaro->anyadirTelefonos('254369872');
    $alvaro->anyadirTelefonos('569823654');

    echo Empleado::toHtml($alvaro);