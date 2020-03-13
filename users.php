<?php include_once 'controllers/getAllUsers.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/users.css">
    <title>Mythic | Utilisateurs</title>
</head>

<body>
    <?php include_once './templates/header.php' ?>
    <main>
        <table>
            <thead>
                <tr>
                    <th colspan="4">Utilisateurs</th>
                </tr>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Modifier les infos</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td class="light-border padding-left"><?= ucfirst($user['name']) ?></td>
                        <td class="padding-left"><?= ucfirst($user['description']) ?></td>
                        <form action="./updateData.php" method="post">
                            <td>
                            <input type="hidden" name="name" value="<?= $user['name']?>">
                            <input type="hidden" name="description" value="<?= $user['description']?>">
                            <input type="submit" name="idChange" value="<?= $user['id'] ?>"></td>
                        </form>
                        <form action="./controllers/delete.php" method="post">
                            <td><input type="submit" name="idDelete" value="<?= $user['id'] ?>"></td>
                        </form>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>

</html>