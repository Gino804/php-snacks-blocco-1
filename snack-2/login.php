<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- In realtà il form effettua già il controllo sulla @ dell'email e sull'età che sia un numero, quindi gli ultimi due controlli qui sono superflui -->
    <?php if (strlen($name) <= 3 || !str_contains($email, '.') || !str_contains($email, '@') || !is_numeric($age)) : ?>
        <p>Accesso negato</p>
    <?php else : ?>
        <p>Accesso riuscito</p>
    <?php endif; ?>
</body>

</html>