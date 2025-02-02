<?php 
    try{
        $bdd=new PDO("mysql:host=localhost;dbname=client","root","");
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $e->getMessage();
        echo "error".$e->getMessage();
    }
?>