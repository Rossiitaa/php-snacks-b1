<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php
        $partite = [
            [
                'squadra_casa' => 'Olimpia Milano',
                'squadra_ospite' => 'Cantù',
                'punti_casa' => 55,
                'punti_ospite' => 60
            ],
            [
                'squadra_casa' => 'SQ 2',
                'squadra_ospite' => 'SQ 3',
                'punti_casa' => 75,
                'punti_ospite' => 90
            ],
            [
                'squadra_casa' => 'SQ 4',
                'squadra_ospite' => 'SQ 4',
                'punti_casa' => 90,
                'punti_ospite' => 30
            ],
            [
                'squadra_casa' => 'SQ 5',
                'squadra_ospite' => 'SQ 5',
                'punti_casa' => 60,
                'punti_ospite' => 60
            ],
            [
                'squadra_casa' => 'SQ 6',
                'squadra_ospite' => 'SQ 6',
                'punti_casa' => 100,
                'punti_ospite' => 90
            ],
            [
                'squadra_casa' => 'SQ 7',
                'squadra_ospite' => 'SQ 7',
                'punti_casa' => 85,
                'punti_ospite' => 80
            ],
            [
                'squadra_casa' => 'SQ 8',
                'squadra_ospite' => 'SQ 8',
                'punti_casa' => 45,
                'punti_ospite' => 90
            ],
            [
                'squadra_casa' => 'SQ 9',
                'squadra_ospite' => 'SQ 9',
                'punti_casa' => 55,
                'punti_ospite' => 60
            ]
        ];
    ?>

    <h4>
        <?php 
            for ($i=0; $i < count($partite); $i++) { 
                echo $partite[$i]['squadra_casa'] . ' - ' . $partite[$i]['squadra_ospite'] . ' | ' . $partite[$i]['punti_casa'] . '-' . $partite[$i]['punti_ospite'] . '<br>';
            }
        ?>
    </h4>
</body>
</html>