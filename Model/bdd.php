<?php

class Bdd
{
  public $bdd;

  public function __construct()
  {
    require_once "connect.php";
    try {
      $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }

  // Auth_login BDD vulnerable to injection sql (' OR '1'='1'#)
  // public function login($pseudo, $hash)
  // {
  //   $sql = "SELECT pseudo FROM users WHERE pseudo = '$pseudo' and mdp = '$hash'";
    
  //   $query =  $this->bdd->prepare($sql);
  //   $query->execute();
  //   return $query->fetch();
  // }

  // Auth_login BDD
  public function login($pseudo, $hash)
  {
    $sql = "SELECT pseudo FROM users WHERE pseudo = :pseudo and mdp = :pwd";
    
    $query = $this->bdd->prepare($sql);
    $query->execute(array(":pseudo" => $pseudo,
                           ":pwd" => $hash));
    return $query->fetch();
  }

  // Auth_register BDD
  public function register($pseudo, $mail, $hash, $privilege)
  {
    $sql = "INSERT INTO panier(id_panier) VALUES (NULL);
            
            INSERT INTO users (fk_panier, fk_privilege, pseudo, mail, mdp, date_inscription)
            VALUES (
              (SELECT MAX(id_panier)
              FROM panier
              ),
              :privilege,
              :pseudo,
              :mail,
              :mdp,
              :dateI
            )";

    $d = new DateTime();
    $query = $this->bdd->prepare($sql);
    $query->execute(array(":privilege" => $privilege,
                          ":pseudo" => $pseudo,
                          ":mail" => $mail,
                          ":mdp" => $hash,
                          ":dateI" => $d->format("Y-m-d H:i:s")));
    return $query->fetchAll();
  }


  // Rayon BDD
  public function getRayon()
  {
    $sql = "SELECT * FROM rayon";

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  // Produits BDD
  public function getProduits()
  {
    $sql = "SELECT * FROM produits";

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitById($id)
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, qte_produit_magasin, img_produit, nom_magasin
            FROM produits 
            INNER JOIN magasin on fk_produit = ".$id."
            WHERE id_produit = ".$id;
            
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitsByRayon($rayon)
  {
    $sql = "SELECT * 
            FROM produits 
            WHERE fk_rayon = ".$rayon;
            
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function updateProduitById($id, $img, $nom, $prix, $dispo, $qte) 
  {
    $sql = "UPDATE produits 
            SET img_produit = '$img', nom_produit = '$nom', prix_produit = '$prix', dispo_produit = '$dispo', qte_produit = '$qte' 
            WHERE id_produit = ".$id;

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function deleteProduitById($id)
  {
    $sql = "DELETE FROM produits WHERE id_produit = ".$id;

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    var_dump($sql);
  }

  public function addProduit($img, $nom, $prix, $dispo, $qte, $rayon)
  {
    $sql = "INSERT INTO produits(img_produit, nom_produit, prix_produit, dispo_produit, qte_produit, fk_rayon) 
            VALUES(:img, :nom, :prix, :dispo, :qte, :rayon) ";
            
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":img" => $img,
                          ":nom" => $nom,
                          ":prix" => $prix,
                          ":dispo" => $dispo,
                          ":qte" => $qte,
                          ":rayon" => $rayon));
    return $query->fetchAll();
  }

  // Produits Cart BDD
  public function addProduitCart($pseudo, $id_produit)
  {
    $sql = "INSERT INTO panier_produits (fk_panier, fk_produit, qte)
            VALUES (
              (SELECT fk_panier
              FROM users WHERE pseudo = :pseudo
              ),
              (SELECT id_produit
              FROM produits WHERE id_produit = :id_produit
              ),
              :qte
            )";

    $query = $this->bdd->prepare($sql);
    $query->execute(array(":pseudo" => $pseudo,
                          ":id_produit" => $id_produit,
                          ":qte" => '1'));
    return $query->fetchAll();
  }

  public function getProduitsCart($session)
  {
    $sql = "SELECT id_panier_produit, img_produit, nom_produit, prix_produit, dispo_produit, qte FROM users AS u 
            INNER JOIN panier on u.fk_panier = id_panier 
            INNER JOIN panier_produits AS p_p on p_p.fk_panier = id_panier 
            INNER JOIN produits on fk_produit = id_produit 
            WHERE pseudo = '".$session."'";

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function updateCartProduit($qte, $id) 
  {
    $sql = "UPDATE panier_produits
            SET qte = '$qte' 
            WHERE id_panier_produit = '".$id."'";

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function deleteProduitCartById($id)
  {
    $sql = "DELETE FROM panier_produits WHERE id_panier_produit = ".$id;

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    var_dump($sql);
  }
}

