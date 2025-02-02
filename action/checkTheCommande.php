<?php 
    require "action/connexionbdd.php";
    if(isset($_POST['valider']))
    {
        if(!empty($_POST['commande']) AND !empty($_POST['nomPrenom']) AND !empty($_POST['contact']) AND !empty($_POST['mail']) AND !empty($_POST['heurDarriver']) AND !empty($_POST['placeReserver'] ))
        {
            $error="";
            $commdez=htmlspecialchars($_POST['commande']);
            $name=htmlspecialchars($_POST['nomPrenom']);
            $number=htmlspecialchars($_POST['contact']);
            $mail=htmlspecialchars($_POST['mail']);
            $dateTime=htmlspecialchars($_POST['heurDarriver']);
            $theplaces=htmlspecialchars($_POST['placeReserver']);
            $insert_the_data_of_client=$bdd->prepare("INSERT INTO clients(commande,prenom,email,contact,nombredeplace,heurdarriver)VALUE(?,?,?,?,?,?)");
            $insert_the_data_of_client->execute(array($commdez,$name,$mail,$number,$theplaces,$dateTime));
        }
        else
        {
            $error="Veuillez remplir tout les champs";
        }
        
    }
?>