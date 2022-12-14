<html lang="fr"> 

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../View/css/auth/login.css" />
    <title>Espace Connexion</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../Auth/login_controller.php" method='POST' class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="pseudo" placeholder="Utilisateur" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp" placeholder="Mot de passe" required/>
            </div>
            <input type="submit" value="connexion" class="btn solid" />  
          </form>
          <?php
            if (isset($_GET['error'])) {
            ?>
              <div style="text-align: center;" class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
 
          <img src="../../View/img/auth/simon_sans_fond.png" class="image" alt="" />
        </div>
     
      </div>
    </div>

    <script src="assets/js/app.js"></script>

  </body>
</html>
