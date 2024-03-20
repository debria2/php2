<?php
if(isset($_POST['v1'])) {
    if($_POST['v1'] != "") {
        if($_POST['v1'] & 2 == 0){
            echo $_POST['v1']."é Par";
        }else{
            echo $_POST['v1']."é Impar";
        }
    }else{
        echo "Entre com um número";
    }
}else {
    echo "Entre com um número";
}
?>