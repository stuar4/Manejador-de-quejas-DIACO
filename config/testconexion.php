<?php
//USAR ESTA CON SESSIONES
define('DB_HOST', '75.102.22.187');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'oonigyuo_umgdiaco');//Usuario de tu base de datos
define('DB_PASS', 'Umg2021.');//Contraseña del usuario de la base de datos
define('DB_NAME', 'oonigyuo_diaco');//Nombre de la base de datos

$conexionbd=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conexionbd){
    die("imposible conectarse: ".mysqli_error($conexionbd));
}
if (mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
    ?>


<?php

// NO RRECOMIENDO USAR GENERA ERROR CON LA SESSIONES
    // $servername = "75.102.22.187";
    // $database = "oonigyuo_testoptica";
    // $username = "oonigyuo_estuardo";
    // $password = "Eddy5795.";
    // // Create connection
   
    // $conexionbd = mysqli_connect($servername, $username, $password, $database);
    // // Check connection
    // if (!$conexionbd) {
    //     die("Connection failed: " . mysqli_connect_error());
       
    // }
    
    ?> 

