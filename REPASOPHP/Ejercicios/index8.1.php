<?php
$persona0=['nombre'=>'Julio', 'apellido'=>'Noguera', 'ciudad'=>'Valencia'];
$persona1=['nombre'=>'Bruce', 'apellido'=>'Wane', 'ciudad'=>'Gotham', 'otro'=>'Gotham'];
$persona2=['nombre'=>'Clark', 'apellido'=>'Kent', 'ciudad'=>'Kripton'];
$persona3=['nombre'=>'Selina', 'apellido'=>'Kyle', 'ciudad'=>'Gotham'];

$fichero=[$persona0,$persona1,$persona2,$persona3];


echo "<table border='1'>";

foreach ($fichero as $clave => $persona) {

echo count($persona);
echo "<tr>";
echo "<td>";
echo "nombre: {$persona["nombre"]} apellido {$persona["apellido"]}<br>";
echo "</td>";
echo "</tr>";
}
echo "<table>";