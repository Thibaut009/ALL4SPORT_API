<?php
require_once "../../Model/api.php";
$api = new Api();

if(!empty($_POST['id'])) {
  $id = $_POST['id'];
  $api->getProduitById($id);

} else if (!empty($_POST['rayon'])) {
  $rayon = $_POST['rayon'];
  $api->getProduitsByRayon($rayon);

} else {
  $api->getProduits();
}