<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <title>Document</title>
</head>
<body onload="grupos()">
    <a href="../index.html">
        <button>Volver</button>
      </a>
      <br>
      <br>
    <form>
        <select name="grupo" id="grupo">
            <option value="2BA">2BA</option>
            <option value="3BA">3BA</option>
            <option value="3BB">3BB</option>
        </select>
        <input type="button" name="enviarNota" value="Listar Ultimo promedio" onclick="listaNota()">
        <input type="button" name="enviarExonera" value="Listar Exonera" onclick="Exonera()">
        <input type="button" name="enviarNoExonera" value="Listar NoExonera" onclick="NoExonera()">
    </form>

    <div id="tabla"></div>
    <script src="../JS/funcion.js"></script>
</body>
</html>