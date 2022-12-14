<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

if (!empty($_POST['img']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['dispo']) && !empty($_POST['qte'])) {
  $id = $_POST['id'];
  $img = $_POST['img'];
  $nom = $_POST['nom'];
  $prix = $_POST['prix'];
  $dispo = $_POST['dispo'];
  $qte = $_POST['qte'];

  $bdd->updateProduitById($id, $img, $nom, $prix, $dispo, $qte );

  header("Location: ../Produits/gestionProduits_controller.php");
}

