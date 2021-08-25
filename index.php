<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TRACCIA: 
            1-Creare una variabile con un paragrafo di testo a vostra scelta. (fatto)
            2-Stampare a schermo il paragrafo e la sua lunghezza. (fatto)
            3-Una parola da censurare viene passata dall’utente tramite parametro GET.
            4-Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <!-- qui deve andare il codice PHP per essere visibile in pagina -->
    <?php
        $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Repellendus omnis saepe ea qui explicabo magnam tempora aperiam et? Quasi fugiat distinctio, 
                sunt necessitatibus iste assumenda repellat cumque nemo suscipit modi.";
        $textLen = strlen($text);
        $parolaDaCensurare = $_GET["censura"];
        $censura = str_ireplace($parolaDaCensurare , "***" , $text)
        $textLen2 = strlen($censura);
        
        ?>

        <div><?php echo $text ?></div><br>
        <div>La lunghezza del testo è: <?php echo $textLen ?></div><br><br>

        <div>Nuovo testo con censura : <?php echo $censura ?></div><br>
        <div>La lunghezza del testo con censura è: <?php echo $textLen2 ?></div><br>
</body>
</html>