<?php
header('Content-Type: application/json');

class Api
{
  public $api;

  public function __construct()
  {
    require_once "connect.php";
    try {
      $this->api = new PDO($dsn, $dbUser, $dbPwd);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }

  public function loginUser($pseudo, $hash, $privilege) {
    $sql = "SELECT pseudo FROM users WHERE mdp = :pwd and pseudo = :pseudo and fk_privilege = :privilege";

    $requete = $this->api->prepare($sql);
    $requete->execute(array(":pseudo" => $pseudo, ":pwd" => $hash, ":privilege" => $privilege));

    if ($requete->rowCount() > 0) {
        // L'enregistrement existe, connexion réussie
        $response = array("status" => true, "message" => "Connexion réussie");
    } else {
        // L'enregistrement n'existe pas, échec de la connexion
        $response = array("status" => false, "message" => "Identifiants incorrect");
    }

    echo json_encode($response);
  }

  public function getProduitByQrcode($qrcode)
  {
    $sql = "SELECT nom_produit, description_produit, prix_produit, nom_magasin, qte_produit_magasin, img_produit 
            FROM produits 
            INNER JOIN magasin on fk_produit = id_produit
            WHERE qrcode = :qrcode";

    $requete = $this->api->prepare($sql);
    $requete->bindParam(":qrcode",$qrcode);
    $requete->execute();
    $resultat=$requete->fetchAll();
    echo json_encode($resultat, JSON_NUMERIC_CHECK);
  }
}