<?php

abstract class Juego {
    protected $db;
    protected int $jugador;

    public function __construct() {
        $this->jugador = rand(1, 2);
    }

    abstract public function hayGanador();
}

class Conecta extends Juego {
    private array $juegoConecta;

    public function __construct() {
        parent::__construct();
        $this->juegoConecta = [[], [], [], [], [], []];
    }

    public function insertarFila($columna) {
        if (count($this->juegoConecta[$columna]) < 6) {
            // Cambio de turno manual
            if ($this->jugador == 1) {
                $this->jugador = 2;
            } else {
                $this->jugador = 1;
            }
            array_push($this->juegoConecta[$columna], $this->jugador);
        }
    }

    public function getJuegoConecta() {
        return $this->juegoConecta;
    }

    public function CompruebaHorizontal() {
        $tablero = $this->getJuegoConecta();
        for ($f = 0; $f < 6; $f++) {
            $c1 = 0; $c2 = 0;
            for ($c = 0; $c < 6; $c++) {
                if (isset($tablero[$c][$f])) {
                    if ($tablero[$c][$f] === 1) { $c1++; $c2 = 0; }
                    elseif ($tablero[$c][$f] === 2) { $c2++; $c1 = 0; }
                } else { $c1 = 0; $c2 = 0; }
                if ($c1 >= 4) return "Jugador 1";
                if ($c2 >= 4) return "Jugador 2";
            }
        }
        return false;
    }

    public function CompruebaVertical() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            $c1 = 0; $c2 = 0;
            for ($f = 0; $f < 6; $f++) {
                if (isset($tablero[$c][$f])) {
                    if ($tablero[$c][$f] === 1) { $c1++; $c2 = 0; }
                    elseif ($tablero[$c][$f] === 2) { $c2++; $c1 = 0; }
                } else { $c1 = 0; $c2 = 0; }
                if ($c1 >= 4) return "Jugador 1";
                if ($c2 >= 4) return "Jugador 2";
            }
        }
        return false;
    }

    public function CompruebaDiagonalAscendente() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            for ($f = 0; $f < 6; $f++) {
                $x = $c; $y = $f; $c1 = 0; $c2 = 0;
                while (isset($tablero[$x][$y])) {
                    if ($tablero[$x][$y] === 1) { $c1++; $c2 = 0; }
                    elseif ($tablero[$x][$y] === 2) { $c2++; $c1 = 0; }
                    if ($c1 >= 4) return "Jugador 1";
                    if ($c2 >= 4) return "Jugador 2";
                    $x++; $y++;
                }
            }
        }
        return false;
    }

    public function CompruebaDiagonalDescendente() {
        $tablero = $this->getJuegoConecta();
        for ($c = 0; $c < 6; $c++) {
            for ($f = 5; $f >= 0; $f--) {
                $x = $c; $y = $f; $c1 = 0; $c2 = 0;
                while (isset($tablero[$x][$y])) {
                    if ($tablero[$x][$y] === 1) { $c1++; $c2 = 0; }
                    elseif ($tablero[$x][$y] === 2) { $c2++; $c1 = 0; }
                    if ($c1 >= 4) return "Jugador 1";
                    if ($c2 >= 4) return "Jugador 2";
                    $x++; $y--;
                }
            }
        }
        return false;
    }

    public function hayGanador() {
        $res = $this->CompruebaHorizontal();
        if ($res) return $res;
        $res = $this->CompruebaVertical();
        if ($res) return $res;
        $res = $this->CompruebaDiagonalAscendente();
        if ($res) return $res;
        $res = $this->CompruebaDiagonalDescendente();
        if ($res) return $res;
        return false;
    }

    // TU FUNCIÓN DE CONEXIÓN E INSERCIÓN
    public function guardarEnBD($ganador, $totalFichas) {
        $dsn = 'mysql:dbname=dbname;host=db:3306';
        $usuario_db = 'test';
        $contrasena_db = 'test';

        try {
            $conexion = new PDO($dsn, $usuario_db, $contrasena_db);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Cadenas: Limpieza y formato
            $usuario = $ganador ?? "Desconocido";
            $usuario = $usuario;
            $partida = "Conecta4";
            $tablero =  $totalFichas;

            $sql = "INSERT INTO miTabla(usuario, partida, tablero) VALUES (:usuario, :partida, :tablero)";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(":usuario", $usuario);
            $sentencia->bindParam(":partida", $partida);
            $sentencia->bindParam(":tablero", $tablero);
            $sentencia->execute();

            return $conexion->lastInsertId();

        } catch (PDOException $e) {
            echo '<p>Falló la conexión:</p> ' . $e->getMessage();
            return false;
        }
    }
}

$NuevoJuego = new Conecta();