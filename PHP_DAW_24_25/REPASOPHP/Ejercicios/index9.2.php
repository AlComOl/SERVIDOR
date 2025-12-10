<table border="1">

<?php

for ($i = 1; $i <= 10; $i++) {
 echo "<tr>";
for ($j = 1; $j <= 10; $j++) {

if ($i == 1) {
echo "<td style='background-color:blue; color:white;'>" . $i * $j . "</td>";
} elseif ($j == 1) {
echo "<td style='background-color:red; color:white;'>" . $i * $j . "</td>";
} else {
echo "<td>" . $i * $j . "</td>";
}
}
echo "</tr>";
}

?>
</table>