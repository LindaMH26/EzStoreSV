/*Script by ggsgranados*/
<?php
    $destino= $_POST["Email"];
    $nombre= $_POST["Name"];  
    mail($destino,"Registro en EzStore","Saludos " .$nombre .".\n\n
Es un gusto que te hayas registrado en EzStore.\n
Esperamos que encuentres todo lo que necesites\n\n
Atte.\n
El equipo de EzStore.\n
Tus compras son Ez!");
    header("Location:index.html");
?>