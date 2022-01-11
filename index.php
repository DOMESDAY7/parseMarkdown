<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Domesday'>
    <meta name='description' content='description'>
    <title>RecapReseaux</title>
</head>

<body>
    <?php require_once("Parsedown.php") ?>
    <?php
    $parsedown = new Parsedown();
     $text = file_get_contents("Fiche.md");
    echo $parsedown->text($text);
    
    ?>
 

    

</body>

</html>