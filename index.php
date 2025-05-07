<?php
require_once 'controller/controller.php';
$result = handleForm();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Admin</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
    <label for="login">Login :</label>
    <input type="text" name="login" id="login" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <label>
        <input type="checkbox" name="admin" value="1"> Vous êtes admin
    </label>

    <button type="submit">Envoyer</button>
</form>

<?php if ($result): ?>
    <?php if ($result['error']): ?>
        <p style="color:red;">Veuillez remplir tous les champs.</p>
    <?php else: ?>
        <p>Login : <?= $result['login'] ?></p>
        <p>Mot de passe : <?= $result['password_masked'] ?></p>
        <p>Valeur à enregistrer en base : <?= $result['admin'] ?></p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
