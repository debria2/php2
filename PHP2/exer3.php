<?php
$A = (float) readline("Digite o valor de A: ");
$B = (float) readline("Digite o valor de B: ");

if ($A > $B) {
    echo "A maior que B";
} elseif ($A < $B) {
    echo "A menor que B";
} else {
    echo "A igual a B";
}
?>
