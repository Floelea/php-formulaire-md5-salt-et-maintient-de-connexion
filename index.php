<?php 
session_start();

// unset($_SESSION['estConnecte']);
require_once 'authentification.php';
require_once 'poissonnerie.php';



  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand p-3 bg-secondary text-white" href="/PhP/poissonnerie">Poisson des Halles</a>
        



 <?php if(!$compteVerifie){   ?>           
<form action="" method="post">


<input type="text" name="username" id="" placeholder="username">
<input type="password" name="password" id="" placeholder="password">
<button type="submit" class="btn btn-success">Connexion</button>
</form>

<?php  } else {  ;?>


  <h3>Bonjour <?php echo $_SESSION['username'];?> !</h3>

  <form action="" method="post">
  <button type="submit" name="deconnexion" class="btn btn-danger">Deconnexion</button>

  <?php  } ?>

<?php  echo $messageErreur;   ?>




</form>

          </ul>
        </div>
      </div>
    </nav>
<form class="d-flex justify-content-evenly my-5">
    <button type=submit name="type" value="mer" class="btn btn-primary">Eau de mer</button>
    <button type=submit name="type" value="douce" class="btn btn-primary">Eau douce</button>
    <button type=submit name="type" value="" class="btn btn-primary">Tous les poissons</button>
</form>



    <div class="container"><div class="row"><?php echo $affichagePoisson ?></div></div>
              
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
