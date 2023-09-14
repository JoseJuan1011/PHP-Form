<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table.css" />
    <link rel="stylesheet" href="ProcedimientosPage.css" />
    <title>Procedimientos</title>
    <?php
    session_start();
    include "Connectiondb.php";
    ?>
</head>

<body>
    <header>
        <h1>Autor: José Juan Suárez</h1>
        <h2>Procedimientos</h2>
    </header>
    <main>
        <section id="forms" aria-label="forms">
            <article aria-label="Form Procedimiento 1">
                <form method="post" id="ProcedimientoForm1" action="ProcedimientosAction.php">
                    <h3>Procedimiento 1</h3>
                    <p>El siguiente procedimiento recupera las habitaciones del hotel pasado por parámetro</p>
                    <p>Escriba el nombre del Hotel:
                        <?php select_codHotel("ProcedimientoForm1", true, true); ?>
                    </p>
                    <input type="hidden" name="procedimiento" value="proc1" />
                    <input type="submit" value="Realizar Procedimiento" />
                </form>
            </article>
            <article aria-label="Form Procedimiento 2">
                <form method="post" id="ProcedimientoForm2" action="ProcedimientosAction.php">
                    <h3>Procedimiento 2</h3>
                    <p>El mismo procedimiento que insertar, solo que ahora con validación en caso de
                        que el hotel exista o no, entre otros.</p>
                    <p>Inserte una habitacion: </br>
                        codHotel
                        <?php select_codHotel("ProcedimientoForm2"); ?> <br />
                        numhabitacion <input type="number" name="numhabitacion" min="1" /> <br />
                        capacidad <input type="number" name="capacidad" min="1" /> <br />
                        preciodia <input type="number" name="preciodia" min="1" /> <br />
                        activa <input type="checkbox" name="activa" /> <br />
                    </p>
                    <input type="hidden" name="procedimiento" value="proc2" />
                    <input type="submit" value="Realizar Procedimiento" />
                </form>
            </article>
            <article aria-label="Form Procedimiento 3">
                <form method="post" id="ProcedimientoForm3" action="ProcedimientosAction.php">
                    <h3>Procedimiento 3</h3>
                    <p>Calcula la cantidad de habitaciones que tiene el hotel pasado por parámetro, 
                        y aquellas que tengan un precio por día menor al pasado por parámetro.</p>
                    <p>
                        Elija el Hotel:
                        <?php select_codHotel("ProcedimientoForm3", true, true); ?> <br />
                        Escriba el precio por día: <input type="number" name="preciodia" min="1" />
                    </p>
                    <input type="hidden" name="procedimiento" value="proc3" />
                    <input type="submit" value="Realizar Procedimiento" />
                </form>
            </article>
            <article aria-label="Form Procedimiento 4">
                <form method="post" id="ProcedimientoForm4" action="ProcedimientosAction.php">
                    <h3>Procedimiento 4</h3>
                    <p>Calcula la cantidad de dinero que se ha gastado la persona 
                        en estancias de hoteles</p>
                    <p>
                        Escriba el dni del cliente: <input type="text" name="coddnionie" />
                    </p>
                    <input type="hidden" name="procedimiento" value="proc4" />
                    <input type="submit" value="Realizar Procedimiento" />
                </form>
            </article>
            <article aria-label="Form Volver al menú principal">
                <form action="MainPage.php" method="POST">
                    <input type="submit" value="Volver al menú principal" />
                </form>
            </article>
        </section>
        <section id="salidaProcedimientos"
            aria-label="Salida a tabla o mensaje de resultados del procedimiento seleccionado.">
            <article id="main-output" aria-label="Salida principal de los resultados del procedimiento seleccionado.">
                <?php
                $outputKeyExists = isset($_SESSION["procedimientoOutput"]);
                $output = $outputKeyExists ? $_SESSION["procedimientoOutput"] : "";
                if (isset($output)) {
                    echo $output;
                }
                ?>
            </article>
        </section>
    </main>
</body>

</html>