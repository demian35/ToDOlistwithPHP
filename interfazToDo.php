<?php
include("controladorToDO.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }

        .formularioTareas {
            margin-bottom: 20px;
        }

        .campotarea {
            width: 300px;
            margin-right: 10px;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .tabla {
            width: 100%;
            border-collapse: collapse;
        }

        .tabla th,
        .tabla td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .tabla th {
            background-color: #f2f2f2;
        }

        .tabla-resultados:hover {
            background-color: #f2f2f2;
        }

        .btn-danger {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <form class="formularioTareas" action="" method="post">
        Ingrese una tarea <input class="campotarea" required type="text" name="tarea">
        <br>
        <button class="btn btn-success" type="submit">Agrega tarea</button>
    </form>

    <table class="tabla">
        <thead>
            <tr>
                <th>#</th>
                <th>Tarea</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultados as $tarea) { ?>
                <tr class="tabla-resultados">
                    <td> <?php echo $tarea[0] ?> </td>
                    <td> <?php echo $tarea[1] ?> </td>
                    <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $tarea[0]; ?>" role="button">Borrar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>