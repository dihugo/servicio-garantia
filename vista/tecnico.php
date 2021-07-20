<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <center><div><h1>Servicio Técnico</h1></div></center>
    <div class="container">
        <form action="" class="form-inline">
            <div class="form-group">
                <label for="">Fecha:</label>
                <div class="form-group">
                    <!-- <input class="form-control" type="date"> -->
                    <?php
                    $fechaActual = Date('d/m/y','h:m:s');
                    echo $fechaActual;
                    ?>
                </div>
            </div>

            <div class="form-group">
                <div class="form-inline">
                    <label for="">Número se serie:</label>
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="" class="form-control" />
                            </div>
                            <button class="btn btn-primary"type="button">
                                <i class="fas fa-search">Buscar</i>
                            </button>
                        </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="">Marca:</label>
                    <input class="form-control"type="text" placeholder="Ingresar marca">
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="">Propietario:</label>
                    <input class="form-control"type="text" placeholder="Ingresar nombre completo">
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-group">
                    <label for="">Modelo:</label>
                    <input class="form-control"type="text" placeholder="Ingresar modelo">
                </div>
            </div>
            <br>
            <div class="form-control">
                <div class="form-group">
                    <label for="">Historial:</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="historial">
                        <!--  <option selected>Open this select menu</option> -->
                         <option value="1">Fecha:</option>
                         <option value="2">Detalle:</option>
                         <option value="3">Cambio:</option>
                         <option value="3">observación:</option>
                    </select>
                </div>
            </div>



           <!--  <form>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                </div>
              </form> -->

                

            <div class="form-group">
                <div class="form-group">
                    <label for="">Detalle:</label>
                    <textarea class="form-control"name="detalle" id=""rows="3" placeholder="Ingresar detalles"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="">Cambios:</label>
                    <textarea class="form-control" name="cambio" id=""rows="3"placeholder="Ingresar cambios"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="">Observaciones:</label>
                    <textarea class="form-control"name="observacion" id=""rows="3"placeholder="Ingresar observaciones"></textarea>
                </div>
            </div>
            <center><br><!-- <input class="btn-primary"type="submit" value="Guardar"> --><button class="btn btn-primary">Guardar</button></center><br>
        </form>

    </div>
</body>
</html>