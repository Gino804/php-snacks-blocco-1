<?php
$games = [
    [
        'home_team' => 'Sassuolo Basket',
        'guest_team' => 'Chicago Bulls',
        'home_points' => 120,
        'guest_points' => 13
    ],
    [
        'home_team' => 'Nuxis Basket',
        'guest_team' => 'Golden State Warriors',
        'home_points' => 96,
        'guest_points' => 21
    ],
    [
        'home_team' => 'Sassuolo Basket',
        'guest_team' => 'Nuxis Basket',
        'home_points' => 78,
        'guest_points' => 84
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <ul>
        <?php foreach ($games as $game) : ?>
            <li>
                <?= $game['home_team'] . ' - ' . $game['guest_team'] . ' | ' . $game['home_points'] . '-' . $game['guest_points'] ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>