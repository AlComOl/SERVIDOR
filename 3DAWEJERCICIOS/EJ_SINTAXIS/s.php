

<?php

if(is_array($item)){
    echo "$key1 => Array <br>";
    echo "<strong>$key1:</strong><br>";

    foreach ($item as $key2 => $item2) {
        echo "$key2 [";

        if(is_array($item2)){
            echo "$key";
            echo "] <br>";
        } else {
            echo "$item2 ]<br>";
        }
    }
} else {
    echo "$key1 => $item <br>";
}

