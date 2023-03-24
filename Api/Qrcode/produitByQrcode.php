<?php
require_once "../../Model/api.php";
$api = new Api();

if(!empty($_GET['qrcode'])) {
  $qrcode = $_GET['qrcode'];
  $api->getProduitByQrcode($qrcode);

}