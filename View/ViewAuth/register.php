<html lang="fr"> 

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../View/css/auth/register.css" />
    <title>Espace Inscription</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" onsubmit="return validateEmail()" action="../Auth/register_controller.php" class="sign-in-form">
            <h2 class="title">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="pseudo" placeholder="Utilisateur" required/>
            </div>
            <div class="input-field">
            <i class="fas fa-envelope"></i>
              <input type="text" name="mail"  placeholder="Mail" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="mdp2" id="mdp2" onChange="validate()" placeholder="Confirmer votre mot de passe" required/>
            </div>
            <input type="submit" name="forminscription" value="inscription" class="btn solid" />  
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
 
          <img src="../../View/img/auth/simon_sans_fond.png" class="image" alt="" />
        </div>
     
      </div>
    </div>

    <script src="assets/js/app.js"></script>

    <script>
        function validate() {
            var mdp = document.getElementById("mdp").value;
            var verif_mdp = document.getElementById("mdp2").value;

            if (mdp != verif_mdp) {
                alert("Les mots de passe ne correspondent pas.");
                return false;
            }
            else {
                return true;
            }
        }

        function validateEmail() {
            var email = document.getElementById("mail").value;
           // var emailReg = new RegExp('/^[A-Za-z0-9._-]+@[A-Za-z0-9._-]+\.[a-z][a-z]+$/');
            var valid = /^[A-Za-z0-9._-]+@[A-Za-z0-9._-]+\.[a-z][a-z]+$/.test(email);
            console.log(valid);
            return valid;
        }
    </script>
  </body>
</html>
