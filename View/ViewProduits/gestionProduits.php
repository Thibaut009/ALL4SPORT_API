<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../View/css/produits/gestionProduit.css">
    <title>ALL4SPORT</title>
  </head>

  <body>
    <a href="addProduit_controller.php">Ajouter un produit</a>
      <table>
          <thead>
              <tr>
              <th style="border-top-left-radius: 20px; color: #fff;">id</th>
              <th style="color: #fff;">img</th>
              <th style="color: #fff;">nom</th>
              <th style="color: #fff;">prix</th>
              <th style="color: #fff;">disponibilité</th>
              <th style="color: #fff;">quantité</th>
              <th style="color: #fff;">update</th>
              <th style="border-top-right-radius: 20px; color: #fff;">delete</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach($produits as $produit){ ?> 
              <tr>
                  <td><?= $produit['id_produit'] ?></td>
                  <td><?= $produit['img_produit'] ?></td>
                  <td><?= $produit['nom_produit'] ?></td>
                  <td><?= $produit['prix_produit'] ?></td>
                  <td><?= $produit['dispo_produit'] ?></td>
                  <td><?= $produit['qte_produit'] ?></td>
                  <td><a style="color: red; text-decoration: none;" href="gestionProduits_controller.php?id=<?= $produit['id_produit'] ?>"> update</a></td>
                  <td><a style="color: red; text-decoration: none;" href="deleteProduit_controller.php?id=<?= $produit['id_produit'] ?>"> delete</a></td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
  </body>
</html>