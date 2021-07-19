<?php
  include_once ('../modelo/conexion.php');
    if(isset($_POST['registrar'])){
    if(!empty($_POST['venta'])){ 
      $name =$_POST['adquirido'];
      $nit =$_POST['nit'];
      $address =$_POST['direccion'];

      $marca =$_POST['marca'];
      $modelo =$_POST['modelo'];
      $serie =$_POST['serie'];
       
      $fechainicio = $_POST['fechaInicio'];
      
      echo $name, $nit, $address, $fechainicio ;
    }

     
      if(isset($nit)){
       $bene = "select id_beneficiado from benificiado where ci = $nit";
        $res = getBeneficiado($bene);
        foreach($res as $id)
          $idb=$id['id_beneficiado'];
        if(isset($idb)){
                echo "encontrado benificiado....";
         }else {
            echo "no enocntrado";
            $aux1= "insert into benificiado (nombre, ci, direccion) values ('$name', '$nit', '$address')";
              guardarBeneficiado($aux1);
            $beno = "select id_beneficiado from benificiado where ci = $nit";
              $res1 = getBeneficiado($beno);
            foreach($res1 as $id)
              $idb=$id['id_beneficiado'];
       }
      }else{
        echo"realizado";
      }
      
     if(isset($serie)){
      $equi1 = "select id_equipo from equipo where numero_serie = '$serie'";
      $equipo = getEquipo($equi1);
        foreach($equipo as $id )
         $ide = $id['id_equipo'];
         if(isset($ide)){
            echo"encotrado equipo";
            } else{
              echo"buscando....equipo";
              $valor = "insert into equipo(marca, modelo, numero_serie) values ('$marca', '$modelo', '$serie')";
              guardarBeneficiado($valor);
              $equi = "select id_equipo from equipo where numero_serie = '$serie'";
               $equipo1 = getEquipo($equi);
              foreach($equipo1 as $id )
                $ide = $id['id_equipo'];
     }
    }
      if(isset($ide)&& isset($ide)){
        $aux= "insert into  garantia (benificiado_id_beneficiado, equipo_id_equipo, fecha_inicio, fecha_final) values ('$idb', '$ide', '$fechainicio', null)";
         guardarGarantia($aux); 
        echo"garantia registrado..";
      }
    }
  
?>