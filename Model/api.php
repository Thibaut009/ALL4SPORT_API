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


  public function login($pseudo, $hash, $privilege)
  {
    $sql = "SELECT pseudo FROM users WHERE mdp = :pwd and pseudo = :pseudo and fk_privilege = :privilege";
    
    $requete = $this->api->prepare($sql);
    $requete->execute(array(":pseudo" => $pseudo,
                           ":pwd" => $hash,
                           ":privilege" => $privilege
                           )
                      );

    $resultat=$requete->fetch();
    echo json_encode($resultat, JSON_NUMERIC_CHECK);
  }

  public function getProduits()
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, nom_magasin, qte_produit_magasin, img_produit, fk_rayon 
            FROM produits
            INNER JOIN magasin on fk_produit = id_produit";

    $requete = $this->api->prepare($sql);
    $requete->execute();
    $resultat=$requete->fetchAll();
    echo json_encode($resultat, JSON_NUMERIC_CHECK);
  }

  public function getProduitById($id)
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, nom_magasin, qte_produit_magasin, img_produit 
            FROM produits 
            INNER JOIN magasin on fk_produit = id_produit
            WHERE id_produit = :id";

    $requete = $this->api->prepare($sql);
    $requete->bindParam(":id",$id);
    $requete->execute();
    $resultat=$requete->fetchAll();
    echo json_encode($resultat, JSON_NUMERIC_CHECK);
  }

  public function getProduitsByRayon($rayon)
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, nom_magasin, qte_produit_magasin, img_produit 
            FROM produits
            INNER JOIN magasin on fk_produit = id_produit
            WHERE fk_rayon = :rayon";

    $requete = $this->api->prepare($sql);       
    $requete->bindParam(":rayon",$rayon);
    $requete->execute();
    $resultat=$requete->fetchAll();
    echo json_encode($resultat, JSON_NUMERIC_CHECK);
  }
}