<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  
</head>
<header>
	<nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="../public/index.php"><img src="img/logo_gplus.png" id="logo"></a>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">      
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" class="btnav" href="../public/index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btnav" href="../public/index.php?route=presentation">Présentation</a>
        </li>
        <?php  if ($this->session->get('username')) {
          ?>
          <li class="nav-item">
            <a class="nav-link" class="btnav" href="../public/index.php?route=profil">Mon Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="btnav" href="../public/index.php?route=article">Actualités</a>
          </li>
          <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" class="btnav" href="../public/index.php?route=contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<body>
 <div class="container">
  <div id="content">
    <?= $content ?>
  </div>
</div>


<!-- Footer -->
<footer class=" bg-dark">
  <!-- Copyright -->
  <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
    <a href="#" class="text-white"> Greatcom+</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- jQuery library -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/script.js"></script>



</body>
</html>
<?php 

?>