<html>
<head>
   <link rel="stylesheet" href="FACUNDO POTTI ESTILOS.css">
</head>
<body>
<?php

   $nombre= $_POST["nombre"];
   $password= $_POST["contra"];


   if ($nombre== "SEPTIMO" & $password== "Murialdo12")
   {
   echo "Ha ingresado al sistema con éxito!";
   }

   else {
   echo "Error";
   }
   

?>
</body>
</html>