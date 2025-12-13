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
        $this->juegoConecta[$columna][]=$this->turno();
    }

    public function getJuegoConecta(){
     return $this -> juegoConecta;
    }

}

$NuevoJuego = new Conecta();

?>