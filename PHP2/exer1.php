<?php

$num = $_POST["num"];   

if ($num == 0) {
    echo "Igual a zero!";
} elseif ($num < 0) {
    echo "Negativo!";
} else {
    echo "Positivo!";
}
?>