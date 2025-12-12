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



// echo"EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:

//     public function anyadirTelefono(int telefono) : void → Añade un teléfono al array
//     public function listarTelefonos(): string → Muestra los teléfonos separados por comas
//     public function vaciarTelefonos(): void → Elimina todos los teléfonos

// ";
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

// echo"<br><br>";
// echo"EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos,
//  de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7). Si el constructor recibe un tercer parámetro,
//  será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.";
// echo"<br><br>";

// class Empleado{

//     private string $nombre;
//     private string $apellido1;
//     private string $apellido2;
//     private int $sueldo;
//     private array $telefono=[];


//     public function __construct(string $nom,string $apell1 ,string $apell2, int $suel=1000) {
//         $this->nombre=$nom;
//         $this->apellido1=$apell1;
//         $this->apellido2=$apell2;
//         $this->sueldo=$suel;
//    }


//     public function getNombreCompleto(){

//         echo "El nombre  es {$this->nombre} los apellidos {$this->apellido1}  {$this->apellido2} el sueldo es de {$this->sueldo}";
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

// echo"<br><br>";

// $alvaro= new Empleado("Alvaro","Comenge","Oliver",3000);
// $alvaro->getNombreCompleto();



echo"EmpleadoConstructor8.php: Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del constructor.";

// class Empleado{

//     private array $telefono=[];


//     public function __construct(private string $nom,private string $apell1 ,private string $apell2,private int $suel=1000) {}

        
//      function getNombreCompleto(){

//         return "El nombre  es {$this->nom} los apellidos {$this->apell1}  {$this->apell2} el sueldo es de {$this->suel}";
//     }
    
   



//     function debePagarImpuestos(int $sueldo ):bool{

//         if($sueldo>3333){
//             return true;
//         }else{
//             return false;
//         }
//     }

//     function anyadirTelefono(int $tel):void{

//         array_push($this -> telefono,$tel);

//     }


//     function listarTelefonos():string{
//          $res="";
//         foreach ($this->telefono as $telefonos) {
            
//          $res.=",".$telefonos;
//         }
//         return $res;
        
//     }

//     function vaciarTelefonos():void{

//         $this -> telefono =[];

//     }



// }
// echo"<br><br>";

// $alvaro= new Empleado("Alvaro","Comenge","Oliver",3000);

// echo $alvaro -> getNombreCompleto();

// $alvaro -> anyadirTelefono('458632254');

// echo $alvaro -> listarTelefonos();


echo"<br><br><br>";

// echo"EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade una constante SUELDO_TOPE
//  con el valor del sueldo que debe pagar impuestos, 
// y modifica el código para utilizar la constante.";
// class Empleado{


//   const SUELDO_TOPE = 3333;


//     public function __construct(private string $nom,private string $apell1 ,private string $apell2,private int $suel=1000) {}

    
     

        
//      function getNombreCompleto(){

//         return "El nombre  es {$this->nom} los apellidos {$this->apell1}  {$this->apell2} el sueldo es de {$this->suel}";
//     }
    
   



//     function debePagarImpuestos( ):string{

//         if($this->suel>self::SUELDO_TOPE){
//             return "Debe pagar impuestos";
//         }else{
//             return "No debe pagar impuestos";
//         }
//     }

//     }




// echo"<br><br>";

// $alvaro= new Empleado("Alvaro","Comenge","Oliver",3000);

// echo $alvaro -> getNombreCompleto();

// echo $alvaro -> debePagarImpuestos(3333);


// echo"EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la constante por una variable estática sueldoTope,
//  de manera que mediante getter/setter puedas modificar su valor.";
// echo"Para poner una calse estatica y que se pueda modificar hay que ponerla dentro y fuera del constructor";
//  class Empleado{

//     private static $SUELDO_TOPE = 5000;

//     public function __construct(protected string $nom,protected string $Apelli, protected int $suel) {
//         self::$SUELDO_TOPE;
//     }

//     public function obtenerNombreCompleto():string{
//         return "El nombre del empleado es {$this->nom} el apellido {$this->Apelli} y el sueldo {$this->suel}";
//     }
//     public function getObtenerSueldo_tope(){
//         return self::$SUELDO_TOPE;
//     }
//     public function setModifica(int $valor){

//         self::$SUELDO_TOPE = $valor;
//     }

//     public function debePagarImpuestos(){
//         if($this->suel > SUELDO_TOPE){

//             return "Debes pagar Impuestos";
//         }else{
//             return "No debes pagar impuestos";
//         }
//     }
//  }

//  $alvaro = new Empleado('Alvaro','Comenge',3000);
//  echo $alvaro->obtenerNombreCompleto();
//  echo"<br>";
//  $alvaro-> setModifica(10000);
//  echo $alvaro->getObtenerSueldo_tope();


echo"EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el siguiente método con una cadena HTML que
 muestre los datos de un empleado dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, deberás crear
 un getter para los teléfonos):

    public static function toHtml(Empleado emp): string";


    // class Empleado {

    //     private $telefonos=[];
    //     private static $SUELDO_TOPE=5000;

    //      public function __construct(protected string $nom,protected string $apellido,protected int $sueldo) {
            
    //         static $SUELDO_TOPE;
    //     }

    //     public function guardarTelefonos($tel):void{
            
    //         array_push($this->telefonos,$tel);

    //     }

    //     public function obtenerNombreCompleto():string{
    //         return "El nonbre completo es {$this->nom} apellido {$this->apellido} sueldo {$this->sueldo}";

    //     }

    //     public function setSueldoTope($valor):void{
    //         self::$SUELDO_TOPE=$valor;

    //     }

    //     public function getTelefonos():string{
    //         $res="";
    //         foreach ($this->telefonos as $telefono) {
    //             echo"<ol>";
    //             $res.="<li>$telefono</li>";
              
    //         }
    //         echo"</ol>";
    //           return $res;
    //     }


    //     public static function toHtml(Empleado $emp): string{
    //         $res="";
    //         $res.="<p>Datos del empleado:</p>".$emp->nom." ".$emp->apellido."<p>Sueldo: $emp->sueldo </p>". $emp->getTelefonos();
            
    //         return $res;
    //      }

    // }

    // echo"<br><br><br>";

    // $alvaro = new Empleado('Alvaro','Comenge','3000');

    // // echo $alvaro->obtenerNombreCompleto();
    // $alvaro -> guardarTelefonos('345678094');
    //    $alvaro -> guardarTelefonos('679262365');
    // echo"<br><br>";
    // // echo $alvaro -> getTelefonos();

    // // echo $alvaro->getTelefonos($alvaro);


    // echo Empleado::toHtml($alvaro);



