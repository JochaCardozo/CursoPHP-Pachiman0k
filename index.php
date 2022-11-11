<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center">
                <br>
                Envíenos su consulta
                <br>
                <br>
            </h1>
            <form action="createMensaje.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Juan">
                        </div>
                    </div>  

                    <div class="col-sm-6">
                        <div class="mb-3">
                             <label for="lastname" class="form-label">Apellido:</label>
                             <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Perez">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                             <label for="email" class="form-label">E-mail:</label>
                             <input type="email" class="form-control" name="email" id="email" placeholder="juanperez@gmail.com">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Celular</label>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="2616588982">
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                            <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="6" placeholder="Comentarios">Hola, </textarea>
                        </div>
                </div>

                <div class="row">
                        <div class="col text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                No soy un robot
                                </label>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-sm 5 mx-auto text-center d-grid gap-2">
                        <button type="submit" class="btn btn-outline-primary">enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>