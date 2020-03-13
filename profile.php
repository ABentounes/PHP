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
    <?php include_once './templates/header.php';
    var_dump($_SESSION);
    ?>
    <?php $idChange = $_SESSION['id'] ?>
    <?php include './controllers/getOneUser.php' ?>

    <main>
        <form action="./controllers/preferences.php" method="post">
            <label for="profileName">
                <input type="text" name="profileName" value="<?= ucfirst($user[0]['name']) ?>" required>
            </label>
            <label for="profileDesc">
                <textarea name="profileDesc" cols="70" rows="10"><?= $user[0]['description'] ?></textarea>
            </label>
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