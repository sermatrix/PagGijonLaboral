<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/estiloGijon.css">
    <title>Confirmación de visita</title>
  </head>
  <body>
    <?php

        $nombre = $_REQUEST["nombre"];
        $apellido = $_REQUEST["apellido"];
        $email = $_REQUEST["email"];
        $telefono = $_REQUEST["telefono"];
        $fecha = $_REQUEST["fecha"];
        $hora = $_REQUEST["hora"];
        $num_personas = $_REQUEST["num_personas"];
        $tipo_entrada = $_REQUEST["tipo_entrada"];
        $observaciones = $_REQUEST["observaciones"];

        echo "<h1>¡Gracias por su solicitud de visita, $nombre!</h1>";
        echo "<p>Su información ha sido recibida y será procesada en breve. Los detalles de su visita son los siguientes:</p>";
        echo "<ul>";
        echo "<li><strong>Nombre:</strong> $nombre</li>";
        echo "<li><strong>Apellido:</strong> $apellido</li>";
        echo "<li><strong>Email:</strong> $email</li>";
        echo "<li><strong>Teléfono:</strong> $telefono</li>";
        echo "<li><strong>Fecha de visita:</strong> $fecha</li>";
        echo "<li><strong>Hora de visita:</strong> $hora</li>";
        echo "<li><strong>Número de personas:</strong> $num_personas</li>";
        echo "<li><strong>Tipo de entrada:</strong> $tipo_entrada</li>";
        echo "<li><strong>Observaciones:</strong> $observaciones</li>";
        echo "</ul>";

        if ($nombre) {
          # code...
        }
      
    ?>
  </body>
</html>