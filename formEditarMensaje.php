<?php

$id = $_GET['id'];
include('db.php');

$query = "SELECT * FROM `tabla` WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center">
                Formulario de Mensajes
                <br>
                <br>
            </h1>
            <form action="editarMensaje.php?id=<?php echo $id?>" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['name']?>" placeholder="Juan">
                        </div>
                    </div>  

                    <div class="col-sm-6">
                        <div class="mb-3">
                             <label for="lastname" class="form-label">Apellido:</label>
                             <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $row['last_name']?>" placeholder="Perez">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                             <label for="email" class="form-label">E-mail:</label>
                             <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']?>" placeholder="juanperez@gmail.com">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Celular</label>
                            <input type="phone" class="form-control" name="phone" id="phone" value="<?php echo $row['phone']?>" placeholder="2616588982">
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje del Cliente</label>
                             <p><?php echo $row['mensaje']?></p>
                        </div>
                </div>

                <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Respuesta:</label>
                            <textarea class="form-control" name="respuesta" id="exampleFormControlTextarea1" rows="3" placeholder="Comentarios"></textarea>
                        </div>
                </div>
                
                <div class="row">
                    <div class="col-sm 5 mx-auto text-center d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">enviar respuesta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>