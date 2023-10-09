<?php
    if (!empty($_POST)){
        $nombre= $_POST ['nombre'];
        $apellido= $_POST ['apellido'];
        $edad= $_POST ['edad'];
        echo('Nombre: ' .$nombre);
        echo('<br>');
        echo('Apellido: '.$apellido);
        echo('<br>');
        echo('Edad: '.$edad);
        echo('<br>');
    }
?>
<form method="POST" action="03.php">
    <label>Nombre:</label><input type="text" name="nombre" /></label>
    <label>Apellido:</label><input type="text" name="apellido" /></label>
    <label>Edad:</label><input type="text" name="edad" /></label>
    <input type="submit">
</form>
<a href="03.php">Volver</a>
