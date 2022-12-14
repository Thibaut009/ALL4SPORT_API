<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();
require "../../View/ViewAuth/login.php";

if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) ) {        
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $hash = hash("sha512",$mdp);

    $login = $bdd->login($pseudo, $hash);
    
    if(!empty($login['pseudo'])) {
        $_SESSION['pseudo'] = $pseudo;
        header("Location: ../../index.php");
    } else {
        $message = "Erreur, identifiant incorrect";
        header("Refresh: 0;login_controller.php?error=".$message);
        exit();
    }

}



