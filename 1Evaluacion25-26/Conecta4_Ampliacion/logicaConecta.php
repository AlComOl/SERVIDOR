<?php
class Conecta4 {
    private array $tablero;
    private int $filas = 6;
    private int $columnas = 6;
    private $ganador = null;
    //esto no se si esta bien 
    private $host = "localhost";
    private $db = "MiTabla";
    private $user = "test";
    private $pass = "test";

    public function __construct() {
        $this->tablero = array_fill(0, $this->columnas, []);
    }

    public function getJuegoConecta(): array {
        return $this->tablero;
    }

    private function conectarBD() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8";
            $conexion = new PDO($dsn, $this->user, $this->pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }

    public function insertarDB($resultado) {
        $conexion = $this->conectarBD();
        if (!$conexion) return;
        try {
            if ($resultado == 1) $columna = "player1";
            elseif ($resultado == 2) $columna = "player2";
            else $columna = "empate";
            $sql = "UPDATE conecta4 SET $columna = $columna + 1 WHERE id = :id";
            $sentencia = $conexion->prepare($sql);
            $id = 1;
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
        } catch (PDOException $e) {
            error_log($e->getMessage());
        } finally {
            $conexion = null;
        }
    }

    public function obtenerDB() {
        $conexion = $this->conectarBD();
        $default = ['player1' => 0, 'player2' => 0, 'empate' => 0];
        if (!$conexion) return $default;
        try {
            $sql = "SELECT player1, player2, empate FROM conecta4 WHERE id = :id";
            $sentencia = $conexion->prepare($sql);
            $id = 1;
            $sentencia->bindParam(':id', $id);
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->execute();
            $res = $sentencia->fetch();
            return $res ?: $default;
        } catch (PDOException $e) {
            return $default;
        } finally {
            $conexion = null;
        }
    }

    public function insertarFila(int $columna, int $jugador): bool {
        if (count($this->tablero[$columna]) < $this->filas && !$this->ganador) {
            $this->tablero[$columna][] = $jugador;
            $this->comprobarTodo($jugador);
            return true;
        }
        return false;
    }

    public function jugarConIA() {
        if ($this->ganador) return;
        $disponibles = [];
        for ($c = 0; $c < $this->columnas; $c++) {
            if (count($this->tablero[$c]) < $this->filas) $disponibles[] = $c;
        }
        if ($disponibles) {
            $col = $disponibles[array_rand($disponibles)];
            $this->insertarFila($col, 2);
        }
    }

    private function comprobarTodo($jugador) {
        $gan = $this->hayGanador();
        if ($gan) {
            $this->ganador = $gan;
            if ($gan == "¡Empate!") $this->insertarDB(0);
            elseif ($jugador == 1) $this->insertarDB(1);
            else $this->insertarDB(2);
        }
    }

    public function hayGanador() {
        $gan = $this->CompruebaHorizontal();
        if (!$gan) $gan = $this->CompruebaVertical();
        if (!$gan) $gan = $this->CompruebaDiagonalAscendente();
        if (!$gan) $gan = $this->CompruebaDiagonalDescendente();
        
        return $gan;
    }

    private function CompruebaHorizontal() {
        for ($f = 0; $f < $this->filas; $f++) {
            $cont1 = $cont2 = 0;
            for ($c = 0; $c < $this->columnas; $c++) {
                $val = $this->tablero[$c][$f] ?? 0;
                if ($val == 1) { $cont1++; $cont2 = 0; }
                elseif ($val == 2) { $cont2++; $cont1 = 0; }
                else { $cont1 = $cont2 = 0; }
                if ($cont1 >= 4) return "¡Has ganado!";
                if ($cont2 >= 4) return "Gana la IA";
            }
        }
        return false;
    }

    private function CompruebaVertical() {
        for ($c = 0; $c < $this->columnas; $c++) {
            $cont1 = $cont2 = 0;
            for ($f = 0; $f < $this->filas; $f++) {
                $val = $this->tablero[$c][$f] ?? 0;
                if ($val == 1) { $cont1++; $cont2 = 0; }
                elseif ($val == 2) { $cont2++; $cont1 = 0; }
                else { $cont1 = $cont2 = 0; }
                if ($cont1 >= 4) return "¡Has ganado!";
                if ($cont2 >= 4) return "Gana la IA";
            }
        }
        return false;
    }

    private function CompruebaDiagonalAscendente() {
        for ($c = 0; $c <= $this->columnas - 4; $c++) {
            for ($f = 0; $f <= $this->filas - 4; $f++) {
                $v = $this->tablero[$c][$f] ?? 0;
                if ($v && ($this->tablero[$c+1][$f+1] ?? 0) == $v &&
                    ($this->tablero[$c+2][$f+2] ?? 0) == $v &&
                    ($this->tablero[$c+3][$f+3] ?? 0) == $v) {
                    return $v == 1 ? "¡Has ganado!" : "Gana la IA";
                }
            }
        }
        return false;
    }

    private function CompruebaDiagonalDescendente() {
        for ($c = 0; $c <= $this->columnas - 4; $c++) {
            for ($f = 3; $f < $this->filas; $f++) {
                $v = $this->tablero[$c][$f] ?? 0;
                if ($v && ($this->tablero[$c+1][$f-1] ?? 0) == $v &&
                    ($this->tablero[$c+2][$f-2] ?? 0) == $v &&
                    ($this->tablero[$c+3][$f-3] ?? 0) == $v) {
                    return $v == 1 ? "ganas" : "la ia";
                }
            }
        }
        return false;
    }

    private function tableroLleno() {
        foreach ($this->tablero as $col) {
            if (count($col) < $this->filas) return false;
        }
        return true;
    }
}
?>
