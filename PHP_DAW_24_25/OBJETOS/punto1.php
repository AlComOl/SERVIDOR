<?php
// Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:

// Obtener su nombre completo → getNombreCompleto(): string
// Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool

class Empleado{

   
    private string $nombre;
    private string $apellido;
    private float $sueldo;

    public function __construct(string $nombre,string $apellido, float $sueldo){
         $this ->nombre=$nombre;
         $this ->apellido=$apellido;
         $this ->sueldo=$sueldo;
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
    
    
}

$Empleado = new Empleado("Alvaro","Comenge",33333);

echo $Empleado->getNombreCompleto()."<br>";
echo $Empleado->debePagarImpuestos(100000);

?>
