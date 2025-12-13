<?php
class Persona{

      public function __construct(protected string $nombre,protected string $apellido,protected string $edad) {
      
    
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
      /**
     * Get the value of edad
     */
    public function getEdad(): string
    {
        return $this->edad;
    }

    /**
     * Set the value of nombre
     */
    public function setEdad(string $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function getNombreCompleto(){

        return "El nombre del empleado $this->nombre apellido $this->apellido";
    }


    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {

            return "<p>El nombre del empleado es . $p->nombre  el apellido $p->apellido el listado de telefonos</p><br>". $p->listarTelefonos();

        }

        return "No es una instancia de Empleado";

    }





}

class Empleado extends Persona{

    private $telefonos=[];
    private const SUELDO_TOPE=5000;

    
    public function __construct(protected string $nombre,protected string $apellido,private int $sueldo,protected string $edad) {
        parent::__construct($nombre,$apellido,$edad);
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
       
      
    
    }
    
    public function debePagarImpuestos():bool{

        if($this->edad > 21){

        $pagar=$this->sueldo > self::SUELDO_TOPE ? true :false;

        return $pagar;

        }else{

        return false;
        }
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

    // public static function toHtml(Empleado $emp): string{

    //     if ($emp instanceof Empleado) {

    //                 return "<p>El nombre del empleado es . $emp->nombre  el apellido $emp->apellido el listado de telefonos</p>". $emp->listarTelefonos();

    //             }

    //     return "No es una instancia de Empleado"; 
    //    }
}


$david= new Empleado('David', 'Gimenez',2000,51);
$alvaro= new Persona('Alvaro','Comenge',3000,50);

echo"<br><br>";
echo"Edad Empleado";

// echo $david->setEdad('18');
// echo"<br><br>";

echo $david->getEdad();
echo"<br><br>";
echo"Datos  Empleado";

echo"<br><br>";

// echo $david->toHtmlEmp($david);
// echo Persona::toHtmlPers($david);
echo Persona::toHtml($alvaro);


echo"<br><br>";
echo"Pagar impuestos";

// echo $david ->debePagarImpuestos();



