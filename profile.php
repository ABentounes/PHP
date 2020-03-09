<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mythic: Profiles</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/header.css">
</head>

<body>
    <?php include_once './templates/header.php' ?>
    <main>
        <form action="./controllers/preferences.php" method="post">
            <label for="keepImage">Image
                <input type="checkbox" value="imgOn" name="imgCheck" <?= ($_SESSION['imgCheck'] == 'imgOn') ? 'checked' : '' ?>>
            </label>

            <label for="keepDescription">Description
                <input type="checkbox" value="descOn" name="descCheck" <?= ($_SESSION['descCheck'] == 'descOn') ? 'checked' : '' ?>>
            </label>
            <button type="submit">Sauvegarder les préférences</button>
        </form>
    </main>
</body>

</html>