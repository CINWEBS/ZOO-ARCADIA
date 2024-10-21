<!DOCTYPE html>
<html lang="fr">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
   
<link rel="stylesheet" href="connexion.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<header>
<nav class="navbar navbar-expand-md  bg-green" data-bs-theme="white">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">zoo arcardia </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index%20zoo.html">accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">sercice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="habitat.html">habitat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">connnexion</a>
              </li>
             </ul>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>


</header>
<body>
    <h1>Connexion</h1>
    <form action="loginPost.php" method="POST">
        <!-- EMAIL -->
        <label for="email">Adresse email :</label>
        <input type="email" name="email" required /> <br><br>

        <!-- PASSWORD -->
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required /> <br><br>

        <!-- BUTTON -->
        <input type="submit" value="Se connecter"/>
    </form>
</body>
</html>

