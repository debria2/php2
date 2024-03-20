<?php
    if(isset($_POST['submit'])) {
        
        $opcoes = array("pedra", "papel", "tesoura");

        
        $escolha_computador = $opcoes[rand(0,2)];

        
        $escolha_usuario = $_POST['choice'];
        $nome_usuario = $_POST['name'];

        
        echo "<p>$nome_usuario escolheu $escolha_usuario</p>";
        echo "<p>O computador escolheu $escolha_computador</p>";

        
        if ($escolha_usuario == $escolha_computador) {
            echo "<p>Empate!</p>";
        } elseif (($escolha_usuario == "pedra" && $escolha_computador == "tesoura") ||
                  ($escolha_usuario == "papel" && $escolha_computador == "pedra") ||
                  ($escolha_usuario == "tesoura" && $escolha_computador == "papel")) {
            echo "<p>$nome_usuario vence!</p>";
        } else {
            echo "<p>O computador vence!</p>";
        }

        
        echo "<img src='$escolha_usuario.png' alt='$escolha_usuario'>";
        echo "<img src='$escolha_computador.png' alt='$escolha_computador'>";
    }
    ?>