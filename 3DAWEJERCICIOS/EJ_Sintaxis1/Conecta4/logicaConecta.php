<?php

class Conecta{
 
    private  array $juegoConecta;
    private int $jugador;

    public function __construct() {

        $this->juegoConecta=[[],[],[],[],[],[]];
        $this->jugador=rand(1,2);

    }

    function verJugador(){
      return $this ->jugador;
     
    }

    // function turno(){}
    

    function insertarFila($columna){
            $this->juegoConecta[$columna][]=$this->jugador; 
    }

}

$NuevoJuego = new Conecta();

//echo $NuevoJuego -> verJugador();

$NuevoJuego->insertarFila(1);
$NuevoJuego->insertarFila(2);
$NuevoJuego->insertarFila(3);
$NuevoJuego->insertarFila(2);





//insetar - columna

//
?>