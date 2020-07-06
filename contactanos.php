/*Script by ggsgranados */
<?php
    $destino= "gg.sgranados@gmail.com";
    $nombre= $_POST["Name"];
    $correo= $_POST["Email"];
    $telefono= $_POST["Telephone"];
    $mensaje= $_POST["message"];  
    mail($destino,"Contactanos EzStore","
Nombre: " . $nombre . 
"\nCorreo: " .$correo .".\n
Telefono: " .$telefono .".\n\n\n
Mensaje: \n" .$mensaje);
    header("Location:index.html");
?>