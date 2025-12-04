<?php

class Conecta{
 
    private  $juegoConecta=[];
    private int $jugador;

    public function __construct() {

        $this->juegoConecta=[[],[],[],[],[],[]];
        $this->jugador=rand(1,2);

    }

    function verJugador(){
      return $this ->jugador;
     
    }

    function insertarColumna(){
      if(isset($_POST['']))
    }

}

$NuevoJuego = new Conecta();

echo $NuevoJuego -> verJugador();


//insetar - columna

//
?>