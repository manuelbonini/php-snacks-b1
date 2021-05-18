<!--
Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php
    $matches = [
        [
            'home' => 'Lakers',
            'guest' => 'Pellicans',
            'home_point' => '110',
            'guest_point' => '98'
        ],
        [
            'home' => 'Clippers',
            'guest' => 'Thunder',
            'home_point' => '112',
            'guest_point' => '117'
        ],
        [
            'home' => 'Cavaliers',
            'guest' => 'Nets',
            'home_point' => '109',
            'guest_point' => '123'
        ],
        [
            'home' => 'Grizzlies',
            'guest' => 'Warriors',
            'home_point' => '101',
            'guest_point' => '113'
        ],
        [
            'home' => 'Heat',
            'guest' => 'Pistons',
            'home_point' => '120',
            'guest_point' => '107'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snak 1</title>
</head>
<body>
    
    <ul>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
            <?php $this_match = $matches[$i]; ?>

            <li>
                <?php echo $this_match['home'] ?> - <?php echo $this_match['guest'] ?> | <?php echo $this_match['home_point'] ?>-<?php echo $this_match['guest_point'] ?>
            </li>
        <?php } ?>
    </ul>

</body>
</html>