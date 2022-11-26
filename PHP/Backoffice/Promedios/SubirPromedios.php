<?php
echo '<form action="Promedios/php/agregar.php" method='post'>
<label for='ide'>id del estudiante</label>
<br>
<input type='text' name='ide' id='ide' class="input-sesion">
<br>
<html>
<label for="periodo">periodo</label>
<select name="periodo" id="periodo">
    <option value="M/A">M/A</option>
    <option value="M/J/J">M/J/J</option>
    <option value="A/S">A/S</option>
    <option value="final">final</option>
</select>
<label for='nota'>Nota</label>
<br>
<input type='text' name='nota' id='nota' class="input-sesion">
<br>
<input type='submit' value='Enviar' class="a-enviar">
</form>';
?>