<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimientos</title>
    <style> 
        option:empty {
            display:none;
        }
    </style>
    <?php 
        include "Connectiondb.php";
    ?>
</head>
<body>
    <h1>Autor: José Juan Suárez</h1>
    <h2>Procedimientos</h2>

    <form method="post" id="ProcedimientosForm" action="ProcedimientosAction.php" >
        <h3>Procedimiento 1</h3>
        <p>Escriba el nombre del Hotel: <input type="text" name="nomHotel"/> <input type="radio" name="procedimiento" value="proc1"/></p>

        <h3>Procedimiento 2</h3>
        <p>Inserte una habitacion: <input type="radio" name="procedimiento" value="proc2"/></br>
            codHotel <?php select_codHotel("ProcedimientosForm"); ?> <br/>
            numhabitacion <input type="number" name="numhabitacion" min="1"/> <br/>
            capacidad <input type="number" name="capacidad" min="1"/> <br/>
            preciodia <input type="number" name="preciodia" min="1"/> <br/>
            activa <input type="checkbox" name="activa" /> <br/>
        </p>

        <h3>Procedimiento 3</h3>
        <p>
            Escriba el nombre del Hotel: <input type="text" name="nomHotel"/> <input type="radio" name="procedimiento" value="proc3"/> <br/>
            Escriba el precio por día: <input type="number" name="preciodia" min="1"/>
        </p>

        <h3>Procedimiento 4</h3>
        <p>
            Escriba el dni del cliente: <input type="text" name="coddnionie"/> <input type="radio" name="procedimiento" value="proc4"/>
        </p>
        <input type="submit" value="Realizar Procedimiento"/>
        <input type="submit" value="Volver al menú principal" formaction="MainPage.php"/>
    </form>
</body>
</html>