
<?php
    echo "<h1>hola mundo</h1>";

    $productos = [
        ["producto" => "leche", "precio" => 1200, "Información" => "descremada"],
        ["producto" => "Crema de maní", "precio" => 4000, "Información" => "con sal"],
        ["producto" => "leche", "precio" => 1600, "Información" => "descremada"],

    ];
    foreach ($productos as $datos)
    {
        $cantidad = 1;
        $product = $datos["producto"];
        $precio = $datos["precio"];
        $Informacion = $datos["Información"];
        //sumar precios
        $totalprecio += $precio;
        $totalCantidad += $cantidad;
    }
    echo "total cantidad productos no filtrados : ".$totalCantidad;
    echo "<br>";
    $promedio = $totalprecio / $totalCantidad;
    echo "promedio total productos: ". $promedio;
    $nombreBuscado = "descremada";

    // Utilizar array_filter para filtrar el array para descremadas
    $productos_electronicos = array_filter($productos, function ($producto) {
        return $producto["Información"] == "descremada";
    });
    // mostrar la informacion de los productos filtrados por descremadas
    foreach ($productos_electronicos as $productoz) {
        $cantidad = 1;
        $cantidadtotal += $cantidad;
        $preciototalfiltrado += $productoz["precio"];

        echo "<br>";
        echo "productos filtrados: " . $productoz["producto"] ." | precio: ". $productoz["precio"];
    }
    //promedia productos filtrados
    $promediofiltrado=$preciototalfiltrado/$cantidadtotal;
    echo "<br>";

    echo "cantidad de productos filtrados: ". $cantidadtotal;
    //promedio filtrados
    echo "<br>";
    echo "promedio de productos filtrado: " .$promediofiltrado;
    //--------

    // Acceder al valor del producto "leche"
?>
