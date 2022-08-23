<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <?php
        $students = [
            [
            'Nome' => 'Rosario',
            'Cognome' => 'Scuotto',
            'Voti' => [
                'Italiano' => 10,
                'Matematica' => 10,
                'Informatica' => 10,
                'Storia' => 10,
                'Geografia' => 10,
                'Scienze' => 10,
                'Religione' => 10,
                'Ed. Fisica' => 10
                ]
            ],
            [
                'Nome' => 'STUDENT',
                'Cognome' => '2',
                'Voti' => [
                    'Italiano' => 10,
                    'Matematica' => 9,
                    'Informatica' => 8,
                    'Storia' => 7,
                    'Geografia' => 6,
                    'Scienze' => 5,
                    'Religione' => 3,
                    'Ed. Fisica' => 2
                ]
            ],
            [
                'Nome' => 'STUDENT',
                'Cognome' => '3',
                'Voti' => [
                    'Italiano' => 10,
                    'Matematica' => 6,
                    'Informatica' => 6,
                    'Storia' => 3,
                    'Geografia' => 6,
                    'Scienze' => 8,
                    'Religione' => 3,
                    'Ed. Fisica' => 2
                ]
            ],
        ];
        /* var_dump($students);  */

        for ($i = 0; $i < count($students); $i++) {
    ?>
        <ul>
            <li>
                <?php echo $students[$i]['Nome']; ?>
            </li>
            <li>
                <?php echo $students[$i]['Cognome']; ?>
            </li>
            <li>
                Media: <?php echo array_sum($students[$i]['Voti']) / count($students[$i]['Voti']); ?>
            </li>
        </ul>
    <?php
        }
    ?>
</body>
</html>