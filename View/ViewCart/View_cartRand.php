<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../View/css/cart/view_cart.css">
    <title>ALL4SPORT</title>
  </head>

  <body>
      <table>
          <thead>
              <tr>
              <th style="border-top-left-radius: 20px;"></th>
              <th>img</th>
              <th>nom</th>
              <th>prix</th>
              <th>disponibilité</th>
              <th>quantité</th>
              <th>update</th>
              <th style="border-top-right-radius: 20px;">delete</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($ProduitsCart as $produit){ ?> 
          <form method="POST" action="../Cart/updateCart_controller.php">
              <tr>
                  <td style="width: 10px;"><input type="hidden" name="id" value="<?= $produit['id_panier_produit'] ?>"></td>
                  <td><img src="<?= $produit['nom_produit'] ?>" alt=""></td>
                  <td><?= $produit['nom_produit'] ?></td>
                  <td><?= $produit['prix_produit'] ?></td>
                  <td><?= $produit['nom_produit'] ?></td>
                  <td><input style="width: 30px;" type="text" name="qte" value="<?= $produit['nom_produit'] ?>"></td>
                  <td><input class="submit" type="submit" value="update"></td>
                  <td><a style="color: red; text-decoration: none;" href="deleteCart_controller.php?id=<?= $produit['id_panier_produit'] ?>"> delete</a></td>
              </tr>
            </form>
           <?php } ?>
          </tbody>
      </table>
  </body>
</html>