<?php

class Conecta{
 
    private  array $juegoConecta;
    private int $jugador;

    public function __construct() {

        $this->juegoConecta=[[],[],[],[],[],[]];
        $this->jugador=rand(1,2);

    }

    public function verJugador(){
      return $this ->jugador;
     
    }

    private function turno(){

      return ($this->jugador==1)?$this->jugador=2:$this->jugador=1;

    }
    

    public function insertarFila($columna){

       print_r($this->jugador);
        array_unshift($this->juegoConecta[$columna], $this->turno());

    }

    public function getJuegoConecta(){
     return $this -> juegoConecta;
    }



  

 

public function CompruebaHorizontal() {
    $tablero = $this->getJuegoConecta();

    for ($fila = 0; $fila < 6; $fila++) {
        $contador1 = 0;
        $contador2 = 0;

        for ($col = 0; $col < 6; $col++) {
            // Comprobar si hay ficha en esta columna y fila
            if (isset($tablero[$col][$fila])) {
                if ($tablero[$col][$fila] === 1) {
                    $contador1++;
                    $contador2 = 0;
                } elseif ($tablero[$col][$fila] === 2) {
                    $contador2++;
                    $contador1 = 0;
                }
            } else {
               
                $contador1 = 0;
                $contador2 = 0;
            }

            // Comprobar ganador
            if ($contador1 >= 4){
              
                return "Ha ganado el jugador 1";

            } 
            if ($contador2 >= 4){
              return "Ha ganado el jugador 2";

            } 
        }
    }

    return false; 
}




  public function CompruebaVertical(){

  }

  public function CompruebaDiagonalAscendente(){

  }


    public function CompruebaDiagonalDescendente(){
    
  }



}

$NuevoJuego = new Conecta();


?>