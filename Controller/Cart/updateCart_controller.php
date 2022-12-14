<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

if (!empty($_POST['qte'])) {
  $id = $_POST['id'];
  $qte = $_POST['qte'];

  $bdd->updateCartProduit($qte, $id);

  header("Location: ../Cart/cart_controller.php");
}

