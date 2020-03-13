<?php include './controllers/getOneUser.php'?>


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
        <form action="./controllers/updateOneData.php" method="post">
            <input type="hidden" name="idChange" value="<?= $_POST['idChange']?>">
            <?php var_dump($_POST) ?>
            <?php var_dump($user) ?>
            <label for="profileName">
                <input type="text" name="profileName" value="<?= ucfirst($user[0]['name'])?>" required>
            </label>
            <label for="profileDesc">
                <textarea name="profileDesc" cols="70" rows="10"><?= $user[0]['description']?></textarea>
            </label>
            <button type="submit">Sauvegarder les informations</button>
        </form>
    </main>
</body>

</html>