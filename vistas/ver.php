<?php

    $controlador = new ControladorPersona();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Personas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                </thead>
                <tbody>
                    <?php
                    
                        echo "<td>" . $registro["id"] . "</td>";
                        echo "<td>" . $registro["cedula"] . "</td>";
                        echo "<td>" . $registro["nombres"] . "</td>";
                        echo "<td>" . $registro["apellidos"] . "</td>";
                        echo "<td>" . $registro["usuario"] . "</td>";
                        echo "<td>" . $registro["clave"] . "</td>";
                    
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
