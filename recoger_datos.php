<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Confirmación de visita</title>
  </head>
  <body>
    <?php
      // Verifica si se recibió información a través del método POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera los valores enviados a través del formulario
        $nombre = test_input($_POST["nombre"]);
        $apellido = test_input($_POST["apellido"]);
        $email = test_input($_POST["email"]);
        $telefono = test_input($_POST["telefono"]);
        $fecha = test_input($_POST["fecha"]);
        $hora = test_input($_POST["hora"]);
        $num_personas = test_input($_POST["num_personas"]);
        $tipo_entrada = test_input($_POST["tipo_entrada"]);
        $observaciones = test_input($_POST["observaciones"]);

        // Imprime un mensaje de confirmación con los datos de la visita
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
      }
      
    ?>
  </body>
</html>