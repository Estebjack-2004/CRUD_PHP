<body>
<section>
            <h1>Seccionn de registrar</h1>
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
        </section>
    
    
    <?php

        $controlador = new ControladorPersona();
        if(isset($_POST["enviar"])){
            $res = $controlador -> crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
            echo $res;
        }

    ?>

    <?php
    if (isset($_POST["enviar"])) {
        $res = $controlador->crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"],$_POST["clave"]);
        header("Location:index.php");
        exit();
    }

    ?>
