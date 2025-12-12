<!-- Persona.php: Copia la clase del ejercicio anterior en Empleado.php y modifícala.
Crea una clase Persona que sea padre de Empleado, de manera que Persona contenga el nombre y los apellidos, 
y en Empleado quede el salario y los teléfonos. -->
<!-- 
PHP 7  -->
<?php
// class Empleado {

//     private $telefonos=[];

//     // private string $nombre;
//     // private string $apellido;
//     // private int $sueldo;
    
//     public function __construct($nom,$apell,$suel) {
//         $this->nombre=$nom;
//         $this->apellido=$apell;
//         $this->sueldo=$suel;
    
//     }
    



//     public function getNombreCompleto():string{

//         return "El nombre es {$this->nombre} el apellido {$this->apellido} y el sueldo {$this->sueldo}";

//     }

//     public function debePagarImpuestos():bool{
//         $pagar=$this->sueldo > 3333 ? true :false;

//         return $pagar;
//     }


//     /**
//      * Get the value of nombre
//      */
//     public function getNombre(): string
//     {
//         return $this->nombre;
//     }

//     /**
//      * Set the value of nombre
//      */
//     public function setNombre(string $nombre): self
//     {
//         $this->nombre = $nombre;

//         return $this;
//     }

//     /**
//      * Get the value of apellido
//      */
//     public function getApellido(): string
//     {
//         return $this->apellido;
//     }

//     /**
//      * Set the value of apellido
//      */
//     public function setApellido(string $apellido): self
//     {
//         $this->apellido = $apellido;

//         return $this;
//     }

//     /**
//      * Get the value of sueldo
//      */
//     public function getSueldo(): int
//     {
//         return $this->sueldo;
//     }

//     /**
//      * Set the value of sueldo
//      */
//     public function setSueldo(int $sueldo): self
//     {
//         $this->sueldo = $sueldo;

//         return $this;
//     }

//     // public function anyadirTelefono(int $telefono) : void{

//     //     array_push($this->telefonos,$telefono);
        
//     // }

//       public function anyadirTelefono(int $telefono) : void{//para añadir varios telefonos mejor esta

//         $this->telefonos[]=$telefono;
        
//     }
//     public function listarTelefonos(): string{

//     }
//     }

// $alvaro= new Empleado(/*'Andres','Martinez',4000*/);

//     $alvaro->setNombre('Alvaro');
//     $alvaro->setApellido('Comenge');
//     $alvaro->setSueldo('5000');

//     echo $alvaro-> getNombreCompleto();
//     echo"<br>";
//     echo $alvaro-> debePagarImpuestos();






// PHP 8

class Persona{

      public function __construct(protected string $nombre,protected string $apellido) {
      
    
    }

     /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    } 

    public function getNombreCompleto(){

        return "El nombre del empleado $this->nombre apellido $this->apellido";
    }



}



class Empleado extends Persona{

    private $telefonos=[];
    const SUELDO_TOPE=5000;

    
    public function __construct(protected string $nombre,protected string $apellido,private int $sueldo) {
        parent::__construct($nombre,$apellido);
        $this->nombre=$nombre;
        $this->apellido=$apellido;
       
      
    
    }
    




    public function debePagarImpuestos():bool{
        $pagar=$this->sueldo > self::SUELDO_TOPE ? true :false;

        return $pagar;
    }


   
    /**
     * Get the value of sueldo
     */
    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo(int $sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }



    public function anyadirTelefono(int $telefono) : void{

        $this->telefonos[]=$telefono;
        
    }
    public function listarTelefonos(): string{
       echo"<ol>";
        foreach ($this->telefonos as $telefono) {
            
            echo"<li>$telefono</li>";
        }
        echo"</ol>";

        return 'listado';

    }

    public function vaciarTelefonos():void{

        $this->telefonos=[];

    }

    public static function toHtml(Empleado $emp): string{

        return "<p>El nombre del empleado es . $emp->nombre  el apellido $emp->apellido el listado de telefonos</p>". $emp->listarTelefonos();
    }
}

$alvaro= new Persona('Andres','Martinez');
$emp=new Empleado('Luis','marques',500000);

    $alvaro->setNombre('Alvaro');
//     $alvaro->setApellido('Comenge');
//     $alvaro-> setSueldo('1000');
       echo  $alvaro-> getNombre();
       echo"<br>";
       echo  $alvaro-> getApellido();
       echo"<br>";
       echo  $alvaro-> getNombreCompleto();

       $emp->anyadirTelefono('6955658');
       $emp->anyadirTelefono('458225858');
    // $alvaro->anyadirTelefono('45875588');
    // $alvaro->anyadirTelefono('4583225858');


       echo"<br>";
       echo $emp-> getNombreCompleto();
//     echo"<br>";
    echo"1- pagarImpuestos : ";
    echo $emp-> debePagarImpuestos();
//     echo"<br>";
       Empleado::toHtml($emp);

//     $alvaro->vaciarTelefonos();

    //  Empleado::toHtml($alvaro);



 

    
