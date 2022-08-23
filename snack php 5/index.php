<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. -->
    <?php
        $longParagraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget consectetur nisi nisi eget consectetur. Nunc euismod, nisi eget consectetur consectetur, nisi nisi consectetur nisi, eget con';
        $paragraph2 = explode('.', $longParagraph);
        var_dump($paragraph2);
    ?>

    <?php
        for ($i = 0; $i < count($paragraph2); $i++) {
            echo '<p>' . $paragraph2[$i] . '</p>';
        }
    ?>
</body>
</html>