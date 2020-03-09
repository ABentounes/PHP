<?php session_start() ?>

<header>
  <nav>
    <ul>
      <li><a href="/">Accueil</a></li>
      <li><a href="./meet.php">Rencontres</a></li>
      <li><a href="#">Nous Contacter</a></li>

      <?php if (isset($_SESSION['name'])) : ?>
        <li class="dropdown">
          <span>Bonjour <?= $_SESSION['name'] ?></span>
          <ul class="dropdownContent">
            <li><a href="../profile.php"> Profil</a></li>
            <li><a href="../controllers/disconnect.php">Déconnection </a></li>

          </ul>
        </li>
      <?php else : ?>
        <li><a href="../login.php">Connection </a></li>
      <?php endif ?>

    </ul>
  </nav>
</header>