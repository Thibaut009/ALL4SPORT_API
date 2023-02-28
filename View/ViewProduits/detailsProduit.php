<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../View/css/produits/detailsProduit.css">
    <title>ALL4SPORT</title>
  </head>

  <body>
    <?php foreach($produitById as $produit){ ?> 
    <main class="l-main bd-grid">
      <div class="home">
        <!-- ===== SNEAKER ===== -->
        <div class="sneaker">
          <div class="sneaker__figure"></div>
            <div>
              <img src="<?= $produit['img_produit'] ?>" alt="" class="sneaker__img shows" color="#A29596">
            </div>
        </div>

        <!-- ===== IFORMACION ===== -->
        <div class="info">
          <!-- ===== DATA ===== -->
          <div class="data">
            <h1 class="data__title">
              <?= $produit['nom_produit'] ?>
            </h1>
            <span class="data__subtitle">
              Disponibles à <?= $produit['nom_magasin'] ?>
            </span>
            <p class="data__description">
              Lorem Ipsum is simply dummy text of the printing
              <br> and typesetting industry. Lorem Ipsum has been the industry's
            </p>
          </div>

          <!-- ===== ACTIONS ===== -->
          <div class="actions">
            <!-- ===== SIZE ===== -->
            <div class="size">
              <h3 class="size__title">
                Quantité du produit au magasin
              </h3>
              <div class="size__content">
                <span class="size__tallas active">
                  <?= $produit['qte_produit_magasin'] ?>
                </span>
              </div>
            </div>            
          </div>

          <!-- ===== PRECI ===== -->
          <div class="preci">
            <span class="preci__title">
              <?= $produit['prix_produit'] ?> €
            </span>
            <a class="preci__button" href="../../Controller/Cart/addProduitCart_controller.php?id_produit=<?= $produit['id_produit'] ?>">ADD TO CART</a>
          </div>
        </div>
      </div>
    </main>
    <?php } ?>
  </body>
</html>