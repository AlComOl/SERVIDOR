<?php

print_r($_GET["curso"]);

echo"<br>";
foreach ($_GET["curso"] as $key => $value) {

    echo"$value <br>";
}

?>