<?php
$paragraph = 'Noriaki Kakyoin è uno dei personaggi principali della terza parte de Le Bizzare Avventure Di Jojo, Stardust Crusaders.

Essendo un portatore di stand dalla nascita quando era piccolo ha passato 50 giorni con una febbre altissima col rischio perenne di morire, a scuola, essendo che nessuno riusciva a vedere il suo Hierophant Green, non parlava con nessuno, cosa che preoccupava molto i genitori di Noriaki e i suoi insegnanti, infatti afferma che i suoi primi e unici amici sono stati i suoi compagni di viaggio.

Inizialmente Noriaki si presenta come un nemico attacando Jotaro venendo sconfitto, ma alla fine Jotaro gli toglierà il "verme" che DIO gli aveva piantato in fronte.

Si assenta per un pò a causa di una ferita agli occhi provocata dallo stand di Ndoul. Tornerà appena in tempo per affrontare Terence T D Arby venendo però sconfitto e "ucciso" per un breve lasso di tempo dato che poco dopo Terence verrà sconfitto da Jotaro e Joseph.

Nel combattimento contro DIO subisce un colpo di The World in piena pancia e morirà poco dopo cercando di far capire a Joseph che lo stand di DIO può fermare il tempo.';

$exploded_paragraph = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bonus</title>
</head>

<body>
    <h3>Paragrafo originale: </h3>
    <p> <?= $paragraph ?> </p>

    <h3>Paragrafi separati: </h3>
    <?php foreach ($exploded_paragraph as $p) : ?>
        <p><?= $p ?>.</p>
    <?php endforeach ?>
</body>

</html>