<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
  $produitById = $bdd->getProduitById($id);
  require "../../View/ViewProduits/updateProduit.php";
  //Tu éxécute la requête, et fait un affichage classique...

} else {
  $produits = $bdd->getProduits();
  require "../../View/ViewProduits/gestionProduits.php";
}