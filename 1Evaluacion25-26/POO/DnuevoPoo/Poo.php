<?php

// echo"Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:

//     Obtener su nombre completo → getNombreCompleto(): string
//     Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool

// ";

// echo"<br>";

// class Empleado{

//     private string $nombre;
//     private string $apellido1;
//     private string $apellido2;
//     private int $sueldo;


//     public function getNombre(){
//      return $this -> nombre;
//     }

//     public function setNombre(string $nom){
//         $this -> nombre=$nom;

//     }

//     public function getApellido1(){
//       return $this -> apellido;
//     }

//     public function setApellido1(string $apell){
//         $this -> apellido1=$apell;

//     }
//      public function getApellido2(){
//       return $this -> apellido2;
//     }

//     public function setApellido2(string $apell){
//         $this -> apellido2=$apell;

//     }


//     public function getNombreCompleto(){

//         echo "El nombre  es {$this->nombre} los apellidos {$this->apellido1}  {$this->apellido2}";
//     }

//     function debePagarImpuestos(int $sueldo ):bool{

//         if($sueldo>3333){
//             return true;
//         }else{
//             return false;
//         }
//     }
// }

// $alvaro=new Empleado();

// $alvaro->setNombre('Alvaro');
// $alvaro->setApellido1('Comenge');
// $alvaro->setApellido2('Oliver');

// $alvaro->getNombreCompleto();
// echo"<br>";

// var_dump($alvaro->debePagarImpuestos(4000));



echo"EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:

    public function anyadirTelefono(int telefono) : void → Añade un teléfono al array
    public function listarTelefonos(): string → Muestra los teléfonos separados por comas
    public function vaciarTelefonos(): void → Elimina todos los teléfonos

";
// echo"<br>";
// echo"<br><br>";

// class Empleado{

//     private string $nombre;
//     private string $apellido1;
//     private string $apellido2;
//     private int $sueldo;
//     private array $telefono=[];


//     public function getNombre(){
//      return $this -> nombre;
//     }

//     public function setNombre(string $nom){
//         $this -> nombre=$nom;

//     }

//     public function getApellido1(){
//       return $this -> apellido1;
//     }

//     public function setApellido1(string $apell){
//         $this -> apellido1=$apell;

//     }
//      public function getApellido2(){
//       return $this -> apellido2;
//     }

//     public function setApellido2(string $apell){
//         $this -> apellido2=$apell;

//     }


//     public function getNombreCompleto(){

//         echo "El nombre  es {$this->nombre} los apellidos {$this->apellido1}  {$this->apellido2}";
//     }

//     function debePagarImpuestos(int $sueldo ):bool{

//         if($sueldo>3333){
//             return true;
//         }else{
//             return false;
//         }
//     }

//     public function anyadirTelefono(int $tel):void{

//         array_push($this -> telefono,$tel);

//     }


//    public function listarTelefonos():string{
//          $res="";
//         foreach ($this->telefono as $telefonos) {
            
//          $res.=",".$telefonos;
//         }
//         return $res;
        
//     }

//     public function vaciarTelefonos():void{

//         $this -> telefono =[];

//     }


// }

// $alvaro= new Empleado();

// $alvaro -> anyadirTelefono(679232996);
// $alvaro -> anyadirTelefono(345679796);
// $alvaro -> anyadirTelefono(345679796);

// echo $alvaro -> listarTelefonos();

// $alvaro -> vaciarTelefonos();

// echo $alvaro -> listarTelefonos();

echo"<br><br>";
echo"EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos,
 de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7). Si el constructor recibe un tercer parámetro,
 será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.";
echo"<br><br>";

class Empleado{

    private string $nombre;
    private string $apellido1;
    private string $apellido2;
    private int $sueldo;
    private array $telefono=[];


    public function __construct(string $nom,string $apell1 ,string $apell2, int $suel=1000) {
        $this->nombre=$nom;
        $this->apellido1=$apell1;
        $this->apellido2=$apell2;
        $this->sueldo=$suel;
   }


    public function getNombreCompleto(){

        echo "El nombre  es {$this->nombre} los apellidos {$this->apellido1}  {$this->apellido2} el sueldo es de {$this->sueldo}";
    }

    function debePagarImpuestos(int $sueldo ):bool{

        if($sueldo>3333){
            return true;
        }else{
            return false;
        }
    }

    public function anyadirTelefono(int $tel):void{

        array_push($this -> telefono,$tel);

    }


   public function listarTelefonos():string{
         $res="";
        foreach ($this->telefono as $telefonos) {
            
         $res.=",".$telefonos;
        }
        return $res;
        
    }

    public function vaciarTelefonos():void{

        $this -> telefono =[];

    }


}

echo"<br><br>";

$alvaro= new Empleado("Alvaro","Comenge","Oliver",3000);
$alvaro->getNombreCompleto();



echo"EmpleadoConstructor8.php: Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del constructor.";
