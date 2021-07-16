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
?>