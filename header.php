<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/pendu.css">

</head>

<?php 

$path = $_SERVER['PHP_SELF']; // $path = exemple: pendu/index.php
$file = basename ($path); // $file = exemple : index.php 

$index = 'index.php' ; 
$admin = 'admin.php';

?>
<!-- MENU HEADER -->
<header class="main-head">
        <nav>
            <h1 id="logo">Hangman Game</h1>
            <ul>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
<!--
<header>
<nav class="main-head">
  <div class="container">
    <a class="navbar-brand" href="#">Hangman game</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php if($file != $index){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Jeu</a>
        </li>
      <?php } ?>
      <?php if($file != $admin){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
</header>
      -->
