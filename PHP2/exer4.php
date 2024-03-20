<?php


function tipoTriangulo($a, $b, $c) {
    if ($a == $b && $b == $c) {
        return "equilatero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "isosceles";
    } else {
        return "escaleno";
    }
}


function formaTriangulo($a, $b, $c) {
    return ($a + $b > $c && $a + $c > $b && $b + $c > $a);
}


if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    
    if (formaTriangulo($num1, $num2, $num3)) {
        
        $tipo = tipoTriangulo($num1, $num2, $num3);

        
        echo "<img src='$tipo.jpg' alt='$tipo'>";
    } else {
        echo "Os números fornecidos não formam um triângulo.";
    }
} else {
    echo "Por favor, forneça três números.";
}
?>
