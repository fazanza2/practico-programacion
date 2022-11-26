<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <title>Buscar</title>
  </head>
  <body>
    <a href="../index.html">
      <button>Volver</button>
    </a>
    <br>
    <br>
    <form>
      <input type="text" id="ci" value="" placeholder="Ci">
      <input type="text" id="pass" value="" placeholder="Contraseña">
      <input type="button" name="enviar" value="Enviar" onclick="Buscar()">
    </form>
    <br>
    <div id="txtHint"><b></b></div>
<script src="../JS/funcion.js"></script>
  </body>
</html>