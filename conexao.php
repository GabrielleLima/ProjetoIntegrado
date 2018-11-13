<?php

$host = "localhost";
$usuario="root";
$senha = "";
$bd = "projeto_2";

$mysqli = new mysqli($host,$usuario,$senha,$bd);
if($mysqli->connect_errno)
    echo"Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
   else
       echo 'Conexão feita com sucesso';
?>
