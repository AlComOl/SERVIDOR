<!-- Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:

    Obtener su nombre completo → getNombreCompleto(): string
    Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool
 -->
<?php
class Empleado{

    private $nombre;
    private $apellido;
    private $sueldo;



    
    
 


   

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }


       function getNombreCompleto() : string {
        // $this -> nombre = $nombre; 
        // $this -> apellido = $apellido;
     
        return "El nombre completo del Empleado es  $this->nombre  $this->apellido"; 
    }
}

$persona1 = new Empleado();

$persona1  -> setNombre('Pepe');

$persona1 -> setApellido('Cuenca');



 echo $persona1 -> getNombreCompleto();

?>