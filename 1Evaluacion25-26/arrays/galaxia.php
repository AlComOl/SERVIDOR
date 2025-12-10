<?php
$universos = array(
    array(
        "galaxia" => "Vía Láctea",
        "sistemas" => array(
            array(
                "nombre" => "Sistema Solar",
                "planetas" => array(
                    array("nombre" => "Tierra", "satélites" => array("Luna")),
                    array("nombre" => "Marte", "satélites" => array("Fobos", "Deimos")),
                    array("nombre" => "Júpiter", "satélites" => array("Io", "Europa", "Ganimedes", "Calisto"))
                )
            ),
            array(
                "nombre" => "Alpha Centauri",
                "planetas" => array(
                    array("nombre" => "Proxima b", "satélites" => array())
                )
            )
        )
    ),
    array(
        "galaxia" => "Andrómeda",
        "sistemas" => array(
            array(
                "nombre" => "Sistema 1",
                "planetas" => array(
                    array("nombre" => "Planeta X", "satélites" => array("Satélite A", "Satélite B"))
                )
            ),
            array(
                "nombre" => "Sistema 2",
                "planetas" => array(
                    array("nombre" => "Planeta Y", "satélites" => array())
                )
            )
        )
    ),
    array(
        "galaxia" => "Triángulo",
        "sistemas" => array(
            array(
                "nombre" => "Sistema Único",
                "planetas" => array(
                    array("nombre" => "Planeta Solo", "satélites" => array("Solito"))
                )
            )
        )
    )
);





    foreach($universos as $galaxias){

     echo" <h3>$galaxias[galaxia]</h3><br>";
     

        foreach($galaxias['sistemas'] as $sistemas){

            echo"  <h4> *$sistemas[nombre]</h4><br>";

            foreach($sistemas['planetas'] as $planeta ) {

                echo"  -$planeta[nombre]<br>";

                foreach ($planeta['satélites'] as $satelite) {
                    
                    echo"   ----$satelite <br>";
                }
               
            }
           
        }

    }