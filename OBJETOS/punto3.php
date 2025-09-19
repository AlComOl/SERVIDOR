<?php


// EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos, 
// de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7). Si el constructor recibe 
// un tercer parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.

// EmpleadoConstructor8.php: Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del
// constructor.




class Empleado{

   
    // private string $nombre;
    // private string $apellido;
    // private float $sueldo;
    // private array $telefono;

    // public function __construct(string $nombre,string $apellido, float $sueldo=1000){
        //  $this ->nombre=$nombre;
        //  $this ->apellido=$apellido;
        //  $this ->sueldo=$sueldo;
        //php 8 
        public function __construct(
            public string $nombre,
            public string $apellido,
            public float $sueldo = 1000

        ){}
         
    }

  

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    

   
    /**
     * Get the value of apellido
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

   
    /**
     * Get the value of sueldo
     */
    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo(float $sueldo)
    {
        $this->sueldo = $sueldo;


    }
    public  function getNombreCompleto(): string
    {
        return $this->nombre.$this->apellido;
    }

    public  function debePagarImpuestos($sueldo){
        $pagaIpuestos=false;
        if($sueldo>3333){
            $pagaIpuestos=true;
        }else{
            $pagaIpuestos=false;
        }
        return $pagaIpuestos;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this -> telefono[]=$telefono;

    }

    public function listarTelefonos(){
        // return implode(", ", $this->telefono);//tambien se puede hacer
        $lenth=count($this->telefono);
        for ($i=0; $i < $lenth  ; $i++) { 
            echo $this->telefono[$i];
        }
       
    }
    public function vaciarTelefonos(){
       $this ->telefono =[];
        // array_shift($this->telefono);

    }
    
    
}

$Empleado = new Empleado("Alvaro","Comenge",3000);



echo $Empleado ->getSueldo();





?>

