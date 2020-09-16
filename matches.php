<!-- Creiamo un array "matches" contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
    [
        'home' => 'Road Runners',
        'guest' => 'Dunk \'em all',
        'homeScore' => 90,
        'guestScore' => 69
    ],
    [
        'home' => 'His airness',
        'guest' => 'Holy Pasta & Fagioli Team',
        'homeScore' => 55,
        'guestScore' => 70
    ],
    [
        'home' => 'Saluta Antonio Spurs',
        'guest' => 'Chicago Inside',
        'homeScore' => 101,
        'guestScore' => 100
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
</head>
<body>
    <?php for ($i = 0, $size = count($matches); $i < $size ; $i++) {?>
        <p>
            <span><?php echo $matches[$i]['home']?></span> - 
            <span><?php echo $matches[$i]['guest']?></span> | 
            <span><?php echo $matches[$i]['homeScore']?></span>-<span><?php echo $matches[$i]['guestScore']?></span>
        </p>
    <?php }?>
</body>
</html>