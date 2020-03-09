<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <title>Mythic | Accueil</title>
</head>

<body>
  <?php include_once './templates/header.php' ?>
  <main class="flex">
    <?php if (!isset($_SESSION['name'])) : ?>
      <div>
        <h1 class="title">Bienvenue</h1>
      </div>
      <div>
        <p>Merci de bien vouloir vous connecter</p>
      </div>
    <?php else : ?>

      <h1 class="title">Bienvenue <?= $_SESSION['name'] ?></h1>

      <?php if ($_SESSION['imgCheck'] == 'imgOn') : ?>
        <img src="./images/friends.jpg" alt="Yo les bros c'est LRB">
      <?php endif ?>

      <?php if ($_SESSION['descCheck'] == 'descOn') : ?>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed cumque aliquid aperiam aut rem tempore maiores molestiae eligendi, fugit placeat natus enim ea cupiditate obcaecati vel excepturi deserunt dolore eos!</p>


      <?php endif ?>
    <?php endif ?>
  </main>
  <footer>

  </footer>
</body>

</html>