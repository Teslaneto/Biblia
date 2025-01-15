<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/sol.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./assets/css/index2.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/nuvem.css">
    <title>Biblia</title>
</head>
<body class="back">
    <?php
    $verse = rand(1,31);
    ?>

    <div class="nuvem"></div>
    <div id="container">
    <h1>Versículo do Dia</h1>
        <img class="sol" src="./assets/img/sol.png" alt="">
        <?php foreach($versus['verses'] as $verses){
            if($verses['verse'] == $verse){?>
            <p class="margin">"<?= htmlspecialchars( $verses['text']);?>"</p>
            <h3 class="margin"><?= htmlspecialchars($verses['book_name']);?> 
            <span><?= htmlspecialchars($verses['chapter']);?></span>:  
            <span><?= htmlspecialchars($verses['verse']);?></span>
            </h3>
        <?php 
            break;
            }
        }?>
    </div>
    <form class="form" action="" method="post"> 
        <input class="input" type="text" name="livro" placeholder="Ex: Marcos+1 | Livro+Capitulo">
        <input class="input" type="submit" value="pesquisar">
    </form>
</body>
</html>
