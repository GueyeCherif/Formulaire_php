<?php
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$message=$_POST['civilite']."<br>".$_POST['nom']."<br>".$_POST['prenom']."<br>".$_POST['email']."<br>".$_POST['selection']."<br>".$_POST['message']."<br>";
$mailler="cherif.g@codeur.online";
$object="message";
$salut="Content-type:text/html; chaarset=iso-8859-1";

if(mail($mailler,$object,$message, $salut))
{
    echo "<h1>Salut $civilite $prenom $nom votre message a été bien envoyée</h1>";
    

}






?>