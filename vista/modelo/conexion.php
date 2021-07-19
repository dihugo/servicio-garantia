<?php
$pdo=null;
$host="localhost";
$user="victor";
$password="drupal9";
$bdname="service_warranty";

function conectar(){
    try{
        $GLOBALS['pdo']=new PDO("mysql:host=".$GLOBALS['host'].";dbname=".$GLOBALS['bdname']."", $GLOBALS['user'], $GLOBALS['password']);
        $GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch (PDOException $e){
        print "Error!: No se pudo conectar a la bd "."<br/>";
        print "\nError!: ".$e."<br/>"; 
        die();
    }
    
}
function desconectar() {
    $GLOBALS['pdo']=null;
}


function guardarBeneficiado($sql){
      try{
          conectar();
          $sentencia=$GLOBALS['pdo']->prepare($sql);
          $sentencia->execute();
          //$idAutoIncrement=metodoGet($queryAutoIncrement)->fetch(PDO::FETCH_ASSOC);
          $resultado=array_merge($_POST);
          //$sentencia->closeCursor();
          desconectar();
          return $resultado;
      }catch(Exception $e){
          die("Error: ".$e);
      }
    }

    function getBeneficiado($query){
        try{
            conectar();
            $sentencia=$GLOBALS['pdo']->prepare($query);
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->execute();
            //$resultado=array_merge($_PO);
            desconectar();
            return $sentencia;
        }catch(Exception $e){
            die("Error: ".$e);
        }
    }

    function guardarEquipo($sql){
        try{
            conectar();
            $sentencia=$GLOBALS['pdo']->prepare($sql);
            $sentencia->execute();
            //$idAutoIncrement=metodoGet($queryAutoIncrement)->fetch(PDO::FETCH_ASSOC);
            $resultado=array_merge($_POST);
            //$sentencia->closeCursor();
            desconectar();
            return $resultado;
        }catch(Exception $e){
            die("Error: ".$e);
        }
      }

      function getEquipo($query){
        try{
            conectar();
            $sentencia=$GLOBALS['pdo']->prepare($query);
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->execute();
            //$resultado=array_merge($_PO);
            desconectar();
            return $sentencia;
        }catch(Exception $e){
            die("Error: ".$e);
        }
       }

      function guardarGarantia($sql){
        try{
            conectar();
            $sentencia=$GLOBALS['pdo']->prepare($sql);
            $sentencia->execute();
            //$idAutoIncrement=metodoGet($queryAutoIncrement)->fetch(PDO::FETCH_ASSOC);
            $resultado=array_merge($_POST);
            //$sentencia->closeCursor();
            desconectar();
            return $resultado;
        }catch(Exception $e){
            die("Error: ".$e);
        }
       }
   


?>