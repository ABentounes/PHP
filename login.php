<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Mythic | Connection</title>
</head>

<body>
    <?php include_once './templates/header.php' ?>
    <main class="flex">
        <form action="./controllers/log.php" class="flex" method="POST">
        <div id="leftSide">
            <div id="circle"></div>
        </div>
        <div id="rightSide" class="flex">
            <h1>Login</h1>
            <div>
                <label for="name">Ton Nom</label><br>
                <input type="text" name="name" autocomplete="off">
            </div>
            <input type="submit" value="Connection">
        </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>