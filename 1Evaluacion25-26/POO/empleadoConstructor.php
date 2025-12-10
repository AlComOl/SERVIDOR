<!-- EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos,
 de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7). Si el constructor recibe un
  tercer parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial. -->

  <?php
class Empleado{

    private $nombre;
    private $apellido;
    private $sueldo;
    private $numTelefono =[];

// public function __construct( protected string $nom,protected string $apell){//php 8

public function __construct($nom, $apell, $sueldo=1000){

  $this ->nombre = $nom;
  $this ->apellido = $apell;
  $this ->sueldo = $sueldo;

}
     
    
   

    // /**
    //  * Get the value of nombre
    //  */
    // public function getNombre()
    // {
    //     return $this->nombre;
    // }

    // /**
    //  * Set the value of nombre
    //  */
    // public function setNombre($nombre): selftruct
    // {
    //     $this->nombre = $nombre;

    //     return $this;
    // }

    // /**
    //  * Get the value of apellido
    //  */
    // public function getApellido()
    // {
    //     return $this->apellido;
    // }

    // /**
    //  * Set the value of apellido
    //  */
    // public function setApellido($apellido): self
    // {
    //     $this->apellido = $apellido;

    //     return $this;
    // }

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
     
        return "El nombre completo del Empleado es  $this->nombre  $this->apellido"; 
    }


    function debePagarImpuestos(): bool{
            
            return $this->sueldo > 3333;

        }


     public function anyadirTelefono(int $telefono) : void{

        $this->numTelefono[]=$telefono;
        
     }

     public function listarTelefonos(): string{
        $res="";
        foreach($this->numTelefono as $tel){
        
          $res.=",".$tel;
        }
        return "Los teléfonos del empleados son ". $res;
     }

     public function vaciarTelefonos(): void{
        $this ->numTelefono=[];
     }
    }

    $per1 = new Empleado("Pepe","Conca",3333);

    $per1 -> getNombreCompleto();

    echo $per1 -> getNombreCompleto();
    echo "<br>";

    echo $per1->getSueldo();


?>