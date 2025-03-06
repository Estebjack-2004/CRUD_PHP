<?php
$controlador = new ControladorPersona();

if (isset($_GET['id'])) {
    $registro = $controlador->ver($_GET['id']);
} else {
    header("Location:index.php");
    exit();
}

if (isset($_POST['eliminar'])) {
    $controlador->eliminar($_GET['id']);
    // Redirige después de eliminar, si es necesario
    header("Location:index.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de personas</title>
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
<form action="" method="post">
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Clave</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro['cedula']; ?></td>
                <td><?php echo $registro['nombres']; ?></td>
                <td><?php echo $registro['apellidos']; ?></td>
                <td><?php echo $registro['usuario']; ?></td>
                <td><?php echo $registro['clave']; ?></td>
                <td><input type="submit" name="eliminar" value="Eliminar"></td>
            </tr>
        </tbody>
    </table>
</form>