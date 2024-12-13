<?php
$dsn = 'mysql:dbname=dbname;host=db:3306'; //nombre Base datos y dónde está la BD
$usuario = 'test';
$contrasena = 'test';

try {

$conexion = new PDO($dsn, $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión Establecida con la BD en Docker";


// $sql = "INSERT INTO miTabla (nombre, email, edad) VALUES ('Julio', 'julio@gmail.com','65')";
// $conexion->exec($sql);
// echo "Nuevo registro creado Correctamente";


// $nombre = $_POST["nombre"] ?? "Pepito";         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
// $email = $_POST["email"] ?? "pepito@gmail.com";
// $edad = $_POST["edad"] ?? "104";

// $sql = "INSERT INTO miTabla(nombre, email, edad) VALUES (:nombre, :email, :edad)";

// $sentencia = $conexion->prepare($sql);
// $sentencia->bindParam(":nombre", $nombre);
// $sentencia->bindParam(":email", $email);
// $sentencia->bindParam(":edad", $edad);
// $isOk = $sentencia->execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok

// $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
// echo $idGenerado;



// DOS FORMAS DE OBTENER LA INFORMACIÖN con PD::FETCH_ASSOC:

// 1) Accedemos a los valores del array


// $sql = "select * from miTabla";

// $sentencia = $conexion -> prepare($sql);
// $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
// $sentencia -> execute();

// while($fila = $sentencia -> fetch()){      //vamos recorriendo fila a fila
//     echo "Id:" . $fila["id"] . "<br />";
//     echo "Nombre:" . $fila["nombre"] . "<br />";
//     echo "Email:" . $fila["email"] . "<br />";
//     echo "Edad:" . $fila["edad"] . "<br />";
// }
// 2) Obtenemos un array con todos valores y vamos recorriendo

    // $sql = "select * from miTabla";

    // $sentencia = $conexion -> prepare($sql);
    // $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    // $sentencia -> execute();

    // $datos = $sentencia -> fetchAll();   //recuperamos todos los datos y los guardamos en un array '$datos'

    // foreach($datos as $fila) {      //vamos recorriendo fila a fila
    //     echo "Id:" . $fila["id"] . "<br />";
    //     echo "Nombre:" . $fila["nombre"] . "<br />";
    //     echo "Email:" . $fila["email"] . "<br />";
    //     echo "Edad:" . $fila["edad"] . "<br />";
    // }

// 3)Si lo que queremos es leer datos con forma de objeto utilizando PDO::FETCH_OBJ, debemos crear un objeto con propiedades públicas con el mismo 
// nombre que las columnas de la tabla que vayamos a consultar.

    // $sql="SELECT * FROM miTabla";

    // $sentencia = $conexion -> prepare($sql);
    // $sentencia -> setFetchMode(PDO::FETCH_OBJ);
    // $sentencia -> execute();

    // while($t = $sentencia -> fetch()) {
    //     echo"id:" . $t -> id . "<br />";
    //     echo"Nombre:" . $t -> nombre . "<br />";
    //     echo"Teléfono:" . $t -> email . "<br />";
    // }

    // 3. Si queremos obtener un sólo valor 

        
        // $sql="SELECT * FROM miTabla WHERE id=:id";
        // $sentencia = $conexion->prepare($sql);
        // $sentencia->bindParam(':id', $id);
        // $sentencia->setFetchMode(PDO::FETCH_ASSOC);
        // $sentencia->execute(); 
        // $fila= $sentencia->fetch();



        // Esborrar registres

        // $identificador = $_GET["id"] ?? 6;              //si No recibe ningún valor del $_GET asigna 0.

        // $sql = "DELETE FROM miTabla WHERE id = :idValor";
    
        // $sentencia = $conexion->prepare($sql);    
        // $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
        // $isOk = $sentencia->execute();                      //borra los valores
    
        // $cantidadAfectada = $sentencia->rowCount();  //Devuelve el número de filas afectadas por la última sentencia SQL
        // echo $cantidadAfectada;

//         Actualitzar Dades

// A continuació mostro un exemple amb cada mètode:


$id = $_GET["id"] ?? 1;                 //los valores que queremos cambiar
$email = "julio@email.com";

$sql = "UPDATE miTabla SET email=:email WHERE id=:id";   

$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':id', $id);
$sentencia->bindParam(':email',$email);
$sentencia->execute();       //borra los valores

$cantidadAfectada = $sentencia->rowCount(); //Devuelve el número de filas afectadas por la última sentencia SQL
echo $cantidadAfectada;


}
catch (PDOException $e) { //en caso de detectar un error lo muestra
echo 'Falló la conexión: ' . $e->getMessage();
}

$conexion = null; //cierra conexión
?>