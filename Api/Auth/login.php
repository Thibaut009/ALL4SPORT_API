<?php
require_once "../../Model/api.php";
$api = new Api();

if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) ) {        
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $hash = hash("sha512",$mdp);
    $privilege = 2;

    $api->login($pseudo, $hash, $privilege);
}
