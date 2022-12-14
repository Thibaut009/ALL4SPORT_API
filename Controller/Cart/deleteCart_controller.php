<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$id = $_GET['id'];
$ProduitsCart = $bdd->deleteProduitCartById($id);

header("Location: ../Cart/cart_controller.php");