 
 <?php


class Empleado{


    public function __construct(private string $nom,private string $apell,private string $sue){}

     function getNombreCompleto(){
        return  "El nombre del empleado {$this-> nom} y el apellido {$this->apell} y tiene un sueldo de {$this ->sue}";
    
     }


     }

       
    
    
    

$per2=new Empleado('Pepe','Cuenca',1000);


echo $per2 -> getNombreCompleto();
?>
<!-- EmpleadoConstructor8.php: Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del constructor. -->
