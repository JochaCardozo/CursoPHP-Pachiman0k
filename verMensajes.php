<?php

include('db.php');

$query = "SELECT * FROM `tabla`";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mensajes</title>
    <style>

        td{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <h2>Tabla de Mensajes</h2>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <?php echo $row['last_name'] ?>
                </td>
                <td>
                    <?php echo $row ['email'] ?>
                </td>
                <td>
                    <?php echo $row ['phone'] ?>
                </td>
                <td>
                    <?php echo $row ['mensaje'] ?>
                </td>
                <td>
                    <?php echo $row ['respondido'] ?>
                </td>
                <td>
                    <?php echo $row ['created_at'] ?>
                </td>
                <td>
                    <a href="formEditarMensaje.php?id=<?php echo $row['id']?>">Editar</a>
                    <a href="eliminarMensaje.php?id=<?php echo $row['id']?>">Eliminar</a>
                </td>
            </tr>        
        <?php }?>
    </table>
</body>
</html>
