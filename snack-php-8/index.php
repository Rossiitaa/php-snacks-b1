<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crea un array di 10 array letterali che rappresentano un pomodoro, indicando per ognuna varietà, peso e lunghezza. Calcola quanto pesano tutti i pomodori e la loro media. -->

    <?php
        $pomodori = [
            [
                'varietà' => 'varietà 1',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 2',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 3',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 4',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 5',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 6',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 7',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 8',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 9',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ],
            [
                'varietà' => 'varietà 10',
                'peso' => rand(1, 10),
                'lunghezza' => rand(1, 10)
            ]
        ];
    ?>
    <?php
        $pesoTotale = 0;
        foreach ($pomodori as $pomodoro) {
            $pesoTotale += $pomodoro['peso'];
        }
        $mediaPeso = $pesoTotale / count($pomodori);
        echo '<pre>';
        print_r($pomodori);
        echo '</pre>';
        echo '<p>Il peso totale dei pomodori è ' . $pesoTotale . '</p>';
        echo '<p>La media dei pesi è ' . $mediaPeso . '</p>';
    ?>

</body>
</html>