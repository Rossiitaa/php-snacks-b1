<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell'altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.  -->

    <?php
        $invited = [
            'Michele',
            'Marco',
            'Giuseppe',
            'Giovanni',
            'Fabio',
            'Francesco',
            'Alessandro',
            'Simone',
            'Giacomo',
            'Gianluca',
            'Pietro',
            'Davide'
            ];
    ?>
    <?php
        if(isset($_GET['name'])) {
            $name = $_GET['name'];
            if(in_array($name, $invited)) {
                echo 'ok';
            } else {
                echo 'ko';
            }
        }
    ?>
</body>
</html>