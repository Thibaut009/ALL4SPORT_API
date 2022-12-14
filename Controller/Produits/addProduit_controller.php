<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();
$listRayon = $bdd->getRayon();
require "../../View/ViewProduits/addProduit.php";


if (!empty($_POST['img']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['dispo']) && !empty($_POST['qte']) && !empty($_POST['rayon'])) {
  $img = $_POST['img'];
  $nom = $_POST['nom'];
  $prix = $_POST['prix'];
  $dispo = $_POST['dispo'];
  $qte = $_POST['qte'];
  foreach($_POST['rayon'] as $rayon);

  $bdd->addProduit($img, $nom, $prix, $dispo, $qte, $rayon);

  header("Location: ../Produits/gestionProduits_controller.php");
}

