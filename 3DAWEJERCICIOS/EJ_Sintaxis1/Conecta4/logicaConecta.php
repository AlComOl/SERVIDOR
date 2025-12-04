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

    function insertarFila(){
      if(isset($_POST['1'])){
        if($jugador==1){
            $juegoConecta[][]=1;
        }
      }
    }

}

$NuevoJuego = new Conecta();

echo $NuevoJuego -> verJugador();


//insetar - columna

//
?>