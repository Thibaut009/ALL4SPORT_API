<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$listRayon = $bdd->getRayon();

if (!empty($_SESSION['pseudo'])) {
  $ProduitsCart = $bdd->getProduitsCart($_SESSION['pseudo']);
  require "../../View/ViewCart/view_cart.php";

} else {
  $ProduitsCart = $_SESSION['panier'];
  print_r($_SESSION['panier']['id_panier_produit']);
  print_r($_SESSION['panier']['nom_produit']);
  print_r($_SESSION['panier']['prix_produit']);
  // print_r($ProduitsCart);
  // require "../../View/ViewCart/view_cartRand.php";
}