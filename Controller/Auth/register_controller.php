<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();
require "../../View/ViewAuth/register.php";

if (!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {

    if($_POST['mdp'] == $_POST['mdp2']) {
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $hash = hash("sha512", $mdp);
        $privilege = 2;

        $bdd->register($pseudo, $mail, $hash, $privilege);

        header ("Location: ../Auth/login_controller.php");
    } else {
        header("Refresh: 0;login_controller.php");
        exit();
    }
}   