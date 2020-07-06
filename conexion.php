<?php

function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="ezstore";
    $con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la Base de Datos ".mysql_error);
    mysql_select_db($db,$con);
    return $con;
}

?>