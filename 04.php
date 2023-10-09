<ul>
     <?php
        // Arreglo de elementos para la lista
        $elementos = array("Elemento 1", "Elemento 2", "Elemento 3", "Elemento 4", "Elemento 5", "Elemento 6", "Elemento 7", "Elemento 8", "Elemento 9", "Elemento 10");

        // Determinar cuántos elementos mostrar en la lista
        $tamanoLista = 3; // Tamaño predeterminado

        if (isset($_GET['tamano'])) {
            // Si se pasó un parámetro "tamano" a través de la URL, úsalo como tamaño de la lista
            $tamanoLista = $_GET['tamano'];
        }

        // Limitar el tamaño de la lista según la elección del usuario
        $elementosMostrados = array_slice($elementos, 0, $tamanoLista);

        // Iterar sobre los elementos mostrados y generar la lista HTML
        foreach ($elementosMostrados as $elemento) {
            echo "<li>$elemento</li>";
        }
    ?>
</ul>

    <p>Elegir tamaño de la lista:
        <a href="?tamano=5">Mostrar los primeros 5 elementos</a> |
        <a href="?tamano=10">Mostrar los primeros 10 elementos</a> |
        <a href="?tamano=<?php echo count($elementos); ?>">Mostrar todos los elementos</a>
    </p>




