<!-- EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala.
Añade una propiedad privada que almacene un array de números de teléfonos.
Añade los siguientes métodos:

public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos -->

<?php



class Empleado{

   
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $telefono;

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

    public function anyadirTelefono(int $telefono) : void {
        $this -> telefono[]=$telefono;

    }

    public function listarTelefonos(){
        // return implode(", ", $this->telefono);
        $largo=count($this->telefono);
        for ($i=0; $i < $largo  ; $i++) { 
            echo $this->telefono[$i];
        }
       
    }
    
    
}

$Empleado = new Empleado("Alvaro","Comenge",33333);

echo $Empleado->getNombreCompleto()."<br>";
echo $Empleado->debePagarImpuestos(100000);
$Empleado->anyadirTelefono("679232692");
echo $Empleado->listarTelefonos();



?>
