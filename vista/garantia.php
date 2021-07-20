<?php
  include 'modelo/conexion.php'
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <link rel="stylesheet"  href="style.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    

    <title>Formulario Registro</title>
</head>
<body>
    <div class="container">
        <form action="controlador/registroGarantia.php" method="post">
                <center><h1>CAEXCO</h1></center>
              <center><h2>Certificado de garantias</h2></center>
                <div class="form-group">
                      <label for=""> Nº Documento de Venta:</label>
                      <input class="form-control"type="text" name="venta" placeholder="Ingrese el Nº de venta">
                      <label for="">Aquirido por:</label>
                      <input class="form-control"type="text" name="adquirido" placeholder="Nombre del cliente">
                      <label for="">CI/NIT:</label>
                      <input class="form-control"type="text" name="nit" placeholder="Ingrece CI/NIT">
                      <label for="">Dirección:</label>
                      <input class="form-control"type="text" name="direccion" placeholder="Ingrese su dirección">
                      <label for="">Ciudad:</label>
                      <input class="form-control"type="text" name="ciudad" placeholder="Ingrese su ciudad">
                      <label for="">Teléfono:</label>
                      <input class="form-control"type="text" name="telefono" placeholder="Ingrese su numero de teléfono o celular">
                      <br>
                                    
                              <form action="" class="form-control">
                                  <div class="form-control">
                                      <form>
                                          <div class="row">

                                              <div class="col">
                                                  <label for="">Fecha de venta:</label>
                                                <input type="text" class="form-control" placeholder="Tiempo de garantía en días">
                                              </div>

                                            <div class="col">
                                                <label for="">Inicio:</label>
                                              <input type="date" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label for="">Fin:</label>
                                              <input type="date" class="form-control">
                                            </div>
                                            <div class="form-group"><br>
                                                <label for="">Estado:</label>
                                              <button class="btn-primary">En proceso</button>
                                              <button class="btn-primary">Cancelado</button>
                                              <button class="btn-primary">Finalizado</button>
                                            </div>  
                                          </div>
                                        </form>
                                  </div>
                              </form>
                          </form>
                        
                      
                      <!-- <label for="">Fecha de venta:</label>
                      <input class="form-control"type="text" name="fechaInicio" placeholder="Fecha de venta"> -->
                      <label for="">Marca:</label>
                      <input class="form-control"type="text" name="marca" placeholder="Ingrese la marca">
                      <label for="">Modelo:</label>
                      <input class="form-control"type="text" name="modelo" placeholder="Ingrese su modelo">
                      <label for="">Nº de serie de equipo/motor</label>
                      <input class="form-control"type="text" name="serie" placeholder="Ingrese Nº de motor/equipo"><br>
                      <center><input class="btn-primary"type="submit" name="registrar" value="Registrar"></center><br>
                </div>
                <!-- <input type="checkbox" name="opcion6" value="6">La soga<br> -->
        </form>
    </div>

    
</body>
</html>
