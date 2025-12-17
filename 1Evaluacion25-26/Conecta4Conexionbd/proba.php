<?php

class Prueba{

    private int $numero=1;

   
    
    public function setContador(int $numero){
         $this->numero;
    }

    public function getContador(){
        return $this->numero++;
    }
}


$p=new Prueba();


// echo $p->setContador(1);

echo $p->getContador();
echo $p->getContador();

