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
        <form action="./controllers/log.php" class="flex" method="POST" id="loginForm">
            <div id="leftSide">
                <div id="circle"></div>
            </div>
            <div id="rightSide" class="flex">
                <h1>Login</h1>
                <div>
                    <label for="name">Ton Nom
                    <input type="text" name="name" autocomplete="off">
                    </label>
                    <label for="password">Mot de Passe
                    <input type="password" name="password" autocomplete="off">
                    </label>
                </div>
                <input type="submit" value="Connection">
            </div>
            <p>Si vous n'avez pas de compte, <span>cliquez ici pour vous inscrire</span></p>
        </form>




        <form action="./controllers/inscription.php" class="flex none" method="POST" id="registerForm">
            <div id="leftSide">
                <div id="circle"></div>
            </div>
            <div id="rightSide" class="flex">
                <h1>Inscription</h1>
                <label for="name">Ton Nom
                    <input type="text" name="name" autocomplete="off" required>
                </label>
                <label for="password">Ton Mot de Passe
                    <input type="password" name="password" autocomplete="off" required>
                </label>
                <label for="description">Ta description
                    <input type="text" name="description" autocomplete="off" required>
                </label>
                <input type="submit" value="Connection">
            </div>
            <p>Si vous avez déjà un compte, <span>cliquez ici pour vous connecter</span></p>
        </form>

    </main>
    <footer>

    </footer>
    <script src="./js/form.js"></script>
</body>

</html>