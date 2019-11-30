<?php
    foreach($mensajes as $valor){
        echo $valor['Mensaje']['id_mensaje'].":".$valor['Mensaje']['mensaje']."<br>";
    }
?>