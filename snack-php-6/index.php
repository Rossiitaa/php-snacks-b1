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
    <form action="invited.php" method="get">
        <input type="text" placeholder="Inserisci il nome dell'invitato" name="name">
        <input type="submit" value="Verifica se il tuo nome è presente nell'elenco">
    </form>
</body>
</html>