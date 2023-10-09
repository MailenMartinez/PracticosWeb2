<?php
    if (!empty($_POST)){

        $monto= $_POST ['monto'];
         for( $i=1; $i<=12 ; $i++){
            $monto+= ($monto*0.05);
            echo ('en el mes '.$i .' su nuevo monto sera: ' .$monto);
            echo('<br>');
         }
    }
?>



<form method="POST" action="07.php">
    <h3>Ingrese su monto a invertir, interes del 5% mensual</h3>
    <input type="text" name ="monto">
    <input type="submit">
</form>

