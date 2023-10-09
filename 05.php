<h3> "Calcule su IMC"</h3>
<?php
    if (!empty($_POST)){
        $imc= ( $_POST ['peso'] / ($_POST ['altura'] * $_POST ['altura'] ));
        echo('Su imc es: ' .$imc);
        if ($imc < 18.5) {
            echo(' Su peso es bajo.');
        } else if (($imc >= 18.5) && ($imc < 25)) {
            echo (' Su peso es normal.');
        } else if (($imc >= 25) && ($imc < 30)) {
            echo(' Usted tiene sobrepeso.');
        } else {
            echo (' Usted tiene obesidad.');
        }
    }
    

?>

<form method="POST" action="05.php">
    <label>Altura:</label><input type="text" name="altura" /></label>
    <label>Peso:</label><input type="text" name="peso" /></label>
    <input type="submit">
</form>
<a href="05.php">Volver</a>