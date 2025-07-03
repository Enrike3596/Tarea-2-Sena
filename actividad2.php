<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Tabla con foreach</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #cce5ff;
        }
    </style>
</head>
<body>

<?php
    // Arreglos con los datos
    $nombres = array("Juan", "Pedro", "Luis", "Ana", "Maria");
    $apellidos = array("Perez", "Gonzalez", "Lopez", "Gomez", "Rodriguez");
    $edades = array(20, 25, 30, 35, 40);
    $direcciones = array("Calle 65 # 48-50", "Calle 45 # 34-56", "Calle 23 # 12-34", "Calle 78 # 90-12", "Calle 34 # 56-78");
    $telefonos = array("123456789", "987654321", "456789123", "789123456", "321654987");
    $fecha_cumpleaños = array("01/01/2005", "02/02/2000", "03/03/1995", "04/04/1990", "05/05/1985");
    $significado_color = array("Riqueza y Alegría.","Amor y Amistad.","Paz y Tranquilidad.","Creatividad y Optimismo.","Energía y Vitalidad.");
    $colores = array("Rojo", "Azul", "Verde", "Amarillo", "Naranja");

    // Mostrar tabla con encabezados
    echo "<table>";
    echo "<tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha de Cumpleaños</th>
            <th>Color Favorito</th>
            <th>Significado del Color</th>
          </tr>";

    // Usar foreach con índice para recorrer todos los datos sincronizados
    foreach ($nombres as $i => $nombre) {
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>{$apellidos[$i]}</td>";
        echo "<td>{$edades[$i]}</td>";
        echo "<td>{$direcciones[$i]}</td>";
        echo "<td>{$telefonos[$i]}</td>";
        echo "<td>{$fecha_cumpleaños[$i]}</td>";
        echo "<td>{$colores[$i]}</td>";
        echo "<td>{$significado_color[$i]}</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>
