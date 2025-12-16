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

       print_r("Jugador ".$this->jugador);
        array_push($this->juegoConecta[$columna], $this->turno());

    }

    public function getJuegoConecta(){
     return $this -> juegoConecta;
    }



  

 

public function CompruebaHorizontal() {
    $tablero = $this->getJuegoConecta();

    for ($f = 0; $f < 6; $f++) {
        $contador1 = 0;
        $contador2 = 0;

        for ($c = 0; $c < 6; $c++) {
            // Comprobar si hay ficha en esta columna y fila
            if (isset($tablero[$c][$f])) {
                if ($tablero[$c][$f] === 1) {
                    $contador1++;
                    $contador2=0;
                } elseif ($tablero[$c][$f] === 2) {
                    $contador2++;
                    $contador1= 0;
                }
            } else {
               
                $contador1= 0;
                $contador2= 0;
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
    $tablero = $this->getJuegoConecta();

    for ($f=0; $f < 6; $f++) {
        $contador1 = 0;
        $contador2 = 0;

        for ($c=0; $c < 1; $c++) { 

            if(isset($tablero[$f][$c])){
                if($tablero[$f][$c]==1){

                }

            }
            
        } 
        
    }

  }

  public function CompruebaDiagonalAscendente(){

  }


    public function CompruebaDiagonalDescendente(){
    
  }



}

$NuevoJuego = new Conecta();


?>