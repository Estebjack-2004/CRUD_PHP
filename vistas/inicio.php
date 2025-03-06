<?php
    include_once("controladores/ctr_personas.php");
    $controlador = new ControladorPersona();
    $resultado = $controlador->index();
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
            <form action="" method="post">
                <label for="cedula">Cédula</label>
                <input type="text" id="cedula" name="cedula" required>
                
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" required>
                
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" required>
                
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
                
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" required>
                
                <button type="submit" name="enviar">Registrar</button>
            </form>
        </div>
        
        <?php
            if (isset($_POST["enviar"])) {
                $res = $controlador->crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
                echo $res ? "¡Se ha realizado el registro con éxito!" : "ERROR: Falla en realizar el registro";
            }
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $fila["id"] . "</td>";
                        echo "<td>" . $fila["cedula"] . "</td>";
                        echo "<td>" . $fila["nombres"] . "</td>";
                        echo "<td>" . $fila["apellidos"] . "</td>";
                        echo "<td>" . $fila["usuario"] . "</td>";
                        echo "<td>" . $fila["clave"] . "</td>";
                        echo "<td>
                                <a href='?cargar=ver&id=" . $fila["id"] . "'>Ver</a> |
                                <a href='?cargar=editar&id=" . $fila["id"] . "'>Editar</a> |
                                <a href='?cargar=eliminar&id=" . $fila["id"] . "'>Eliminar</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
