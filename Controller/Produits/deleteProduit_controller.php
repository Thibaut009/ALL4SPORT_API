<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$id = $_GET['id'];
$produitById = $bdd->deleteProduitById($id);

header("Location: ../Produits/gestionProduits_controller.php");