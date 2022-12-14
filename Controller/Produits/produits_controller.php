<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$listRayon = $bdd->getRayon();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
  $produitById = $bdd->getProduitById($id);
  require "../../View/ViewProduits/detailsProduit.php";
  //Tu éxécute la requête, et fait un affichage classique...

} elseif (!empty($_POST['rayon'])) {
  foreach($_POST['rayon'] as $rayon);

  if ($rayon == 1) {
    $produits = $bdd->getProduits();
    require "../../View/ViewProduits/view_produits.php";

  } else {
    $produits = $bdd->getProduitsByRayon($rayon);
    require "../../View/ViewProduits/view_produits.php";
  }
} else {
  $produits = $bdd->getProduits();
  require "../../View/ViewProduits/view_produits.php";
}