<?php
echo "<form action='Promedios/php/agregar.php' method='post'>
<label for='ide'>id del estudiante</label>
<br>
<input type='text' name='ide' id='ide' class='input-sesion'>
<br>
<label for='periodo'>Periodo</label>
<br>
<input type='text' name='periodo' id='periodo' class='input-sesion'>
<br>
<label for='nota'>Nota</label>
<br>
<input type='text' name='nota' id='nota' class='input-sesion'>
<br>
<input type='submit' value='Enviar' class='a-enviar'>
</form>";
?>