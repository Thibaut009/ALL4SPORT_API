<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();
$_SESSION['id_rand'] = rand();
$id_rand = $_SESSION['id_rand'];

if (isset($_GET['id_produit']) && !empty($_SESSION['pseudo'])) {
    echo('user log');
    $pseudo = $_SESSION['pseudo'];
    $id_produit = $_GET['id_produit'];

    $addProduitCart = $bdd->addProduitCart($pseudo, $id_produit);
    header("Location: ../Produits/produits_controller.php");

} elseif (isset($_GET['id_produit'])) {
    echo('user not log');
    $id_produit = $_GET['id_produit'];

    /* Article exemple */
    $select = array();
    $select['id'] = "phlevis501";
    $select['nom'] = "ballon";
    $select['prix'] = 84.95;

    /* On vérifie l'existence du panier, sinon, on le crée */
    if(!isset($_SESSION['panier']))
    {
        /* Initialisation du panier */
        $_SESSION['panier']['id_panier_produit'] = array();
        /* Subdivision du panier */
        $_SESSION['panier']['nom_produit'] = array();
        $_SESSION['panier']['prix_produit'] = array();
    }

    /* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
    array_push($_SESSION['panier']['id_panier_produit'],$select['id']);
    array_push($_SESSION['panier']['nom_produit'],$select['nom']);
    array_push($_SESSION['panier']['prix_produit'],$select['prix']);

    /* Affichons maintenant le contenu du panier : */

    print_r($_SESSION['panier']);

    header("Location: ../Produits/produits_controller.php");
}