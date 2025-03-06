<?php
    include_once("controladores/ctr_personas.php");
    $controlador = new ControladorPersona();
    if(isset($_GET['id'])){
        $registro = $controlador->ver($_GET['id']);
    } else {
        header("Location:index.php");
        exit();
    }
    if(isset($_POST['editar'])){
        $controlador->editar($_GET['id'], $_POST['nombres'], $_POST['apellidos'], $_POST['usuario'], $_POST['clave']);
        header("Location: index.php");
        exit();
    }
?>

<h1>Estás en la sección de editar.</h1>

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
<form action="" method="post">
    <h2>Editar Persona</h2>
    <table>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- La cédula la dejamos de solo lectura si no debe editarse -->
                <td>
                    <input type="text" name="nombres" value="<?php echo $registro['nombres']; ?>">
                </td>
                <td>
                    <input type="text" name="apellidos" value="<?php echo $registro['apellidos']; ?>">
                </td>
                <td>
                    <input type="text" name="usuario" value="<?php echo $registro['usuario']; ?>">
                </td>
                <td>
                    <input type="password" name="clave" value="">
                </td>
                <td>
                    <input type="submit" name="editar" value="Guardar Cambios">
                </td>
            </tr>
        </tbody>
    </table>
</form>