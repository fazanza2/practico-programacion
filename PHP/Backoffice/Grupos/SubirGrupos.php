<?php
echo'<form action="Grupos/php/agregar.php" method="post">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre">
<br>
<label for="materia">materia</label>
<select name="materia" id="materia">
    <option value="BD">BD</option>
    <option value="BD2">BD2</option>
    <option value="Prog.2">Prog.2</option>
    <option value="P.Web">P.Web</option>
</select>
<br>
<input type="submit">
</form>';

?>