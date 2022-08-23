<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta  -->
    <?php
        $array = [];
        echo '<pre>';
        for ($i = 0; $i < 15; $i++) {
            $array[] = rand(0, 50);
        }
        $array = array_unique($array);
        var_dump($array);
    ?>
</body>
</html>