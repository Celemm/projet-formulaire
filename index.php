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
<div class="info-message">
    <p>Remplissez les champs suivants ✍️</p>
</div>

    <label for="login">Login :</label>
    <input type="text" name="login" id="login" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <label>
        <input type="checkbox" name="admin" value="1"> Vous êtes admin 👑
    </label>

    <button type="submit">Envoyer</button>
</form>

<?php if ($result): ?>
    <?php if ($result['error']): ?>
        <div class="result-error">
            Veuillez remplir tous les champs.
        </div>
    <?php else: ?>
        <div class="result-message">
            <p><strong>Login :</strong> <?= $result['login'] ?></p>
            <p><strong>Mot de passe :</strong> <?= $result['password_masked'] ?></p>
            <p><strong>Valeur à enregistrer en base :</strong> <?= $result['admin'] ?></p>
        </div>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
