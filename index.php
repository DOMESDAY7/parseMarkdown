<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Domesday'>
    <meta name='description' content='description'>
    <title>RecapReseaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <?php require_once("Parsedown.php") ?>
    <?php
    $parsedown = new Parsedown();
     $text = file_get_contents("Fiche.md"); ?>
     
     <main class="w-75 m-auto text-white contentPage">
         <img src="./img/sun.svg" class="fixed-top switch" style="width:30px" >
         <?= $parsedown->text($text); ?>
     </main>
  <script src="script.js"></script>
</body>

</html>