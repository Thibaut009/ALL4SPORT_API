<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../View/css/produits/view_produits.css">
    <title>ALL4SPORT</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

  <body>
  
    <div class="header">
      <div class="lien-nav">
        <a class="link_gestion" href="../Produits/gestionProduits_controller.php">Gestion produits</a>
      </div>

      <form method="post" action="../Produits/produits_controller.php">
        <div class="rayon-nav">
          <select  name="rayon[]" id="rayon">
          <?php foreach($listRayon as $rayon){ ?> 
            <option value="<?= $rayon['id_rayon'] ?>"><?= $rayon['nom_rayon'] ?></option>
          <?php } ?>
          </select>
          <input class="submit" type="submit" value="Selectionner">
        </div>
      </form>

      <div class="cart-nav">
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
          <span>Cart</span>
        </div>
        <div class="item-count">0</div>
      </div>
    </div>
      
    <div class="wrapper">

      <?php foreach($produits as $produit){ ?> 
        <div class="card">
          <img src="<?= $produit['img_produit'] ?>" alt="">
          <div class="content">
            <div class="row">
              <div class="details">
                <span><?= $produit['nom_produit'] ?></span>
              </div>
              <div class="price">$<?= $produit['prix_produit'] ?></div>
            </div>
            <div class="buttons">
              <a href="produits_controller.php?id=<?= $produit['id_produit'] ?>">View produit</a> 
              <a href="../../Controller/Cart/addProduitCart_controller.php?id_produit=<?= $produit['id_produit'] ?>" class="cart-btn">Add to Cart</a>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
      
    <script src="../View/js/view_produits.js"></script>
  </body>
</html>