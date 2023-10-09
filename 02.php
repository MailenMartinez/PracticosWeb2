<!DOCTYPE html>
<html>
<head>
    <title>Lista de Elementos</title>
</head>
<body>
    <h1>Lista de Elementos Generada desde el Servidor</h1>
    <h2>Arreglo Indexado:</h2>
    <ul>
        <?php
        // Arreglo indexado
        $arregloIndexado = array("Manzana", "Banana", "Cereza", "Damasco");

        // Arreglo asociativo
        $arregloAsociativo = array(
            "Fruta1" => "Manzana",
            "Fruta2" => "Banana",
            "Fruta3" => "Cereza",
            "Fruta4" => "Damasco"
        );

        // Generar la lista HTML a partir del arreglo indexado
        foreach ($arregloIndexado as $fruta) {
            echo "<li>$fruta</li>";
        }
        ?>
    </ul>

    <h2>Arreglo Asociativo:</h2>
    <ul>
        <?php
        // Generar la lista HTML a partir del arreglo asociativo
        foreach ($arregloAsociativo as $clave => $valor) {
            echo "<li>$clave: $valor</li>";
        }
        ?>
    </ul>
</body>
</html>