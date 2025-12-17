<?php

class Conecta {
    private array $juegoConecta;
    private int $jugador;
    private int $contador=1;
  

    public function __construct() {
        $this->juegoConecta = [[],[],[],[],[],[]];
        $this->jugador = rand(1,2);
        
    }

    public function getContador(){
        return $this->contador++;
    }

    public function verJugador() {
        return $this->jugador;
    }

    private function turno() {
        return ($this->jugador == 1) ? $this->jugador = 2 : $this->jugador = 1;
    }

    public function insertarFila($columna) {

        array_push($this->juegoConecta[$columna], $this->turno());
    }

    public function getJuegoConecta() {
        return $this->juegoConecta;
    }
//conprobar si tiene 6 fichas el array




//conexion a la base de datos
    public function conexion($ganador,$contador){
     
 
        
        $dsn = 'mysql:dbname=dbname;host=db:3306';
        $usuario = 'test';
        $contrasena = 'test';

        try {
            $conexion = new PDO($dsn, $usuario, $contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Conexión Establecida con la BD en Docker';

        } catch (PDOException $e) {       //en caso de detectar un error lo muestra
            echo '<p>Falló la conexión:</p> ' . $e->getMessage();
        }

            // $conexion = null;    //cierra conexión


            ///insertar valor

            $usuario = $ganador ?? "Pepito";
            $partida = $contador ?? "Pepito";  
            $tablero = $tablero ?? "1";       //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
           

            $sql = "INSERT INTO miTabla(usuario, partida, tablero) VALUES (:usuario, :partida, :tablero)";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(":usuario", $usuario);
            $sentencia->bindParam(":partida", $partida);
            $sentencia->bindParam(":tablero", $tablero);
            $isOk = $sentencia->execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok

            $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
            echo $idGenerado;

    }

    public function CompruebaHorizontal() {
        $tablero = $this->getJuegoConecta();
        for ($f = 0; $f < 6; $f++) {
            $contador1 = 0;
            $contador2 = 0;
            for ($c = 0; $c < 6; $c++) {
                if (isset($tablero[$c][$f])) {
                    if ($tablero[$c][$f] === 1) { $contador1++; $contador2 = 0; }
                    elseif ($tablero[$c][$f] === 2) { $contador2++; $contador1 = 0; }
                } else { $contador1 = 0; $contador2 = 0; }

                if ($contador1 >= 4){
                  return "jugador1";
                } 
                if ($contador2 >= 4){
                    return "jugador2";
                } 
            }
        }
        return false;
    }

    public function CompruebaVertical() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            $contador1 = 0;
            $contador2 = 0;
            for ($f = 0; $f < 6; $f++) {
                if (isset($tablero[$c][$f])) {
                    if ($tablero[$c][$f] === 1) { $contador1++; $contador2 = 0; }
                    elseif ($tablero[$c][$f] === 2) { $contador2++; $contador1 = 0; }
                } else { $contador1 = 0; $contador2 = 0; }

                if ($contador1 >= 4){
                     return "jugador1";
                }
                if ($contador2 >= 4){
                     return "jugador2";
                }
            }
        }
        return false;
    }

    public function CompruebaDiagonalAscendente() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            for ($f = 0; $f < 6; $f++) {
                $x = $c;
                $y = $f;
                $contador1 = 0;
                $contador2 = 0;

                while (isset($tablero[$x][$y])) {
                    if ($tablero[$x][$y] === 1) { $contador1++; $contador2 = 0; }
                    elseif ($tablero[$x][$y] === 2) { $contador2++; $contador1 = 0; }
                    else { $contador1 = 0; $contador2 = 0; }

                    if ($contador1 >= 4){
                        return " jugador 1";
                    } 
                    if ($contador2 >= 4){
                        return " jugador 2";
                    } 

                    $x++;
                    $y++;
                }
            }
        }
        return false;
    }

    public function CompruebaDiagonalDescendente() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            for ($f = 5; $f >= 0; $f--) {
                $x = $c;
                $y = $f;
                $contador1 = 0;
                $contador2 = 0;

                while (isset($tablero[$x][$y])) {
                    if ($tablero[$x][$y] === 1) { $contador1++; $contador2 = 0; }
                    elseif ($tablero[$x][$y] === 2) { $contador2++; $contador1 = 0; }
                    else { $contador1 = 0; $contador2 = 0; }

                    if ($contador1 >= 4){
                        return " jugador 1";
                    } 
                    if ($contador2 >=4){
                         return " jugador 2";
                    }

                    $x++;
                    $y--;
                }
            }
        }
        return false;
    }

    public function hayGanador() {
        return $this->CompruebaHorizontal() ?: 
            $this->CompruebaVertical() ?: 
            $this->CompruebaDiagonalAscendente() ?: 
            $this->CompruebaDiagonalDescendente();
        }
}

$NuevoJuego = new Conecta();
?>
