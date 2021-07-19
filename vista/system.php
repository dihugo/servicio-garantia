<?php
  include 'modelo/conexion.php'
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    

    <title>Formulario Registro</title>
</head>
<body>
<div class="formulario" metho>
    <form action="controlador/registroGarantia.php" method="post">
            <h1>CAEXCO</h1>
            <h2>Certificado de garantias</h2>
            <p>Nº Documento de Venta:</p>
            <input class="control"type="text" name="venta" placeholder="Ingrese el Nº de venta">
            <p>Adquirido por:</p>
            <input class="control"type="text" name="adquirido" placeholder="Adquirido por">
            <p>CI/NIT:</p>
            <input class="control"type="text" name="nit" placeholder="Ingrece CI/NIT">
            <p>Dirección:</p>
            <input class="control"type="text" name="direccion" placeholder="Ingrese su dirección">
            <p>Cuidad:</p>
            <input class="control"type="text" name="ciudad" placeholder="Ingrese su ciudad">
            <p>Teléfono:</p>
            <input class="control"type="text" name="telefono" placeholder="Ingrese su numero de teléfono">
            <p>Fecha de venta:</p> 
            <input class="control"type="text" name="fechaInicio" placeholder="Fecha de venta">
            <p>Marca:</p>
            <input class="control"type="text" name="marca" placeholder="Ingrese la marca">
            <p>Modelo:</p>
            <input class="control"type="text" name="modelo" placeholder="Ingrese su modelo">
            <p>Nº Serie de Motor/Equipo:</p>
            <input class="control"type="text" name="serie" placeholder="Ingrese Nº de motor/equipo"><br><br>
            <input class="boton"type="submit" name="registrar" value="Registrar">
    <!-- <input type="checkbox" name="opcion6" value="6">La soga<br> -->
</form>
</div>

    
</body>
</html>
