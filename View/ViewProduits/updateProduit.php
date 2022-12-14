<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ALL4SPORT</title>
  </head>

  <body>
    
    <form method="POST" action="../Produits/updateProduit_controller.php" >
    <?php foreach($produitById as $produit){ ?> 
        <p>id produit : <input type="text" name="id" value="<?= $produit['id_produit'] ?>"></p>
        <p>image produit : <input type="text" name="img" value="<?= $produit['img_produit'] ?>" /></p>
        <p>nom produit : <input type="text" name="nom" value="<?= $produit['nom_produit'] ?>" /></p>
        <p>prix produit : <input type="text" name="prix" value="<?= $produit['prix_produit'] ?>" /></p>
        <p>dispo produit : <input type="text" name="dispo" value="<?= $produit['dispo_produit'] ?>" /></p>
        <p>qte produit : <input type="text" name="qte" value="<?= $produit['qte_produit'] ?>" /></p>
        <p><input  type="submit" value="Modifier"></p>
    <?php } ?>
    </form>
    
    
  </body>
</html>