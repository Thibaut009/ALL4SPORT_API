<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../View/css/produits/addProduit.css">
    <title>ALL4SPORT</title>
  </head>

  <body>
    
    <form method="POST" action="../Produits/addProduit_controller.php" > 
      <div class="head-title">
        <h2>Ajouter un produit</h2>
      </div>
      <div class="form-add">
        <div class="form-group">
          <label for="img">Image du produit</label> 
          <input type="text" name="img" id="img"/>
        </div>

        <div class="form-group">
          <label for="nom">Nom du produit</label> 
          <input type="text" name="nom" id="nom"/>
        </div>

        <div class="form-group">
          <label for="prix">Prix du produit</label> 
          <input type="text" name="prix" id="prix"/>
        </div>

        <div class="form-group">
          <label for="dispo">disponibilité du produit</label>
          <input type="text" name="dispo" id="dispo"/>
        </div>

        <div class="form-group">
          <label for="qte">quantité du produit</label>
          <input type="text" name="qte" id="qte"/>
        </div>

        <div class="form-group">
          <label for="rayon">Rayon du produit</label>
          <br>
          <select  name="rayon[]" id="rayon">
          <?php foreach($listRayon as $rayon){ ?> 
            <option value="<?= $rayon['id_rayon'] ?>"><?= $rayon['nom_rayon'] ?></option>
          <?php } ?>
          </select>
        </div>

        <input class="submit" type="submit" value="Ajouter">
      </div>
    </form>
    
    
  </body>
</html>