<body>
    <main>
        <div>
            <form action="" method="post">
                <label for="cedula">Cedula</label>
            
                <label for="nombres">Nombres</label>
            
                <label for="apellidos">Apellidos</label>
            
                <label for="usuario">Usuario</label>>
            
                <label for="clave">Clave</label>
            </form>
        </div>
    </main>
    
    
    <?php

        $controlador = new ControladorPersona();
        if(isset($_POST["enviar"])){
            $res = $controlador -> crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
            echo $res;
        }

        if($res){
            echo "Se ha realizado el registro con éxito!";
        } else {
            echo "ERROR: Falla en realizar el registro";
        }

    ?>
</body>
</html>