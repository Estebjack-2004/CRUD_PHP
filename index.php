<?php
    include_once("controladores/enrutador.php");
    include_once("controladores/ctr_personas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    </nav>
    <main>
        <h1>index del crud</h1>
        <hr>

        <section>
        <?php
            $enrutador = new Enrutador();
            if (isset($_GET["cargar"])){
                $cargar = $_GET["cargar"];
            } else {
                $cargar = "";
            }

            if ($enrutador -> validar_vista($cargar)) {
                $enrutador -> cargar_vista($cargar);
            }
        ?>
        </section>

    </main>
</body>
</html>