<?php
abstract class JuegoFichas {
    protected array $tablero;
    protected int $jugador;
    protected int $filas;
    protected int $columnas;
    protected int $fichasParaGanar;

    public function __construct() {
        $this->jugador = rand(1, 2);
    }

    public function getJugador() { return $this->jugador; }

    protected function turno() {
        $this->jugador = ($this->jugador == 1) ? 2 : 1;
    }

    abstract public function insertarFicha($f, $c);

    public function hayGanador() {
        return $this->compruebaHorizontal() ?: 
               $this->compruebaVertical() ?: 
               $this->compruebaDiagonalAscendente() ?: 
               $this->compruebaDiagonalDescendente();
    }

    protected function compruebaHorizontal() {
        for ($f = 0; $f < $this->filas; $f++) {
            $c1 = $c2 = 0;
            for ($c = 0; $c < $this->columnas; $c++) {
                $v = $this->tablero[$f][$c];
                if ($v === 1) { $c1++; $c2=0; }
                elseif ($v === 2) { $c2++; $c1=0; }
                else { $c1=$c2=0; }
                if ($c1 >= $this->fichasParaGanar) return "Jugador 1 (Rojo)";
                if ($c2 >= $this->fichasParaGanar) return "Jugador 2 (Azul)";
            }
        }
        return false;
    }

    protected function compruebaVertical() {
        for ($c = 0; $c < $this->columnas; $c++) {
            $c1 = $c2 = 0;
            for ($f = 0; $f < $this->filas; $f++) {
                $v = $this->tablero[$f][$c];
                if ($v === 1) { $c1++; $c2=0; }
                elseif ($v === 2) { $c2++; $c1=0; }
                else { $c1=$c2=0; }
                if ($c1 >= $this->fichasParaGanar) return "Jugador 1 (Rojo)";
                if ($c2 >= $this->fichasParaGanar) return "Jugador 2 (Azul)";
            }
        }
        return false;
    }

    protected function compruebaDiagonalAscendente() {
        for ($f = 0; $f <= $this->filas - $this->fichasParaGanar; $f++) {
            for ($c = 0; $c <= $this->columnas - $this->fichasParaGanar; $c++) {
                $c1 = $c2 = 0;
                for ($i=0; $i<$this->fichasParaGanar; $i++) {
                    $v = $this->tablero[$f+$i][$c+$i];
                    if ($v === 1) { $c1++; $c2=0; }
                    elseif ($v === 2) { $c2++; $c1=0; }
                }
                if ($c1 >= $this->fichasParaGanar) return "Jugador 1 (Rojo)";
                if ($c2 >= $this->fichasParaGanar) return "Jugador 2 (Azul)";
            }
        }
        return false;
    }

    protected function compruebaDiagonalDescendente() {
        for ($f = $this->fichasParaGanar - 1; $f < $this->filas; $f++) {
            for ($c = 0; $c <= $this->columnas - $this->fichasParaGanar; $c++) {
                $c1 = $c2 = 0;
                for ($i=0; $i<$this->fichasParaGanar; $i++) {
                    $v = $this->tablero[$f-$i][$c+$i];
                    if ($v === 1) { $c1++; $c2=0; }
                    elseif ($v === 2) { $c2++; $c1=0; }
                }
                if ($c1 >= $this->fichasParaGanar) return "Jugador 1 (Rojo)";
                if ($c2 >= $this->fichasParaGanar) return "Jugador 2 (Azul)";
            }
        }
        return false;
    }

    public function getTablero() { return $this->tablero; }
    public function getFilas() { return $this->filas; }
    public function getColumnas() { return $this->columnas; }
}

class Conecta extends JuegoFichas {
    protected int $filas = 6;
    protected int $columnas = 7; // El estándar es 7
    protected int $fichasParaGanar = 4;

    public function __construct() {
        parent::__construct();
        $this->tablero = array_fill(0, $this->filas, array_fill(0, $this->columnas, 0));
    }

    public function insertarFicha($fila, $columna) {
        // En Conecta 4, la ficha "cae" hasta la última fila libre de esa columna
        for ($f = $this->filas - 1; $f >= 0; $f--) {
            if ($this->tablero[$f][$columna] === 0) {
                $this->tablero[$f][$columna] = $this->jugador;
                $this->turno();
                return true;
            }
        }
        return false;
    }
}

class TresRaya extends JuegoFichas {
    protected int $filas = 3;
    protected int $columnas = 3;
    protected int $fichasParaGanar = 3;

    public function __construct() {
        parent::__construct();
        $this->tablero = array_fill(0, $this->filas, array_fill(0, $this->columnas, 0));
    }

    public function insertarFicha($f, $c) {
        if ($this->tablero[$f][$c] === 0) {
            $this->tablero[$f][$c] = $this->jugador;
            $this->turno();
            return true;
        }
        return false;
    }
}