<?php
require_once "../../Model/api.php";

$api = new Api();

if (!empty($_GET['pseudo']) && !empty($_GET['mdp'])) {
    $pseudo = $_GET['pseudo'];
    $mdp = $_GET['mdp'];
    $hash = hash("sha512", $mdp);
    $privilege = 2;

    $api->loginUser($pseudo, $hash, $privilege);
}



