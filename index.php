<?php
/*
Prima Milestone: COMPLETATA
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone: 
Attraverso l’utilizzo di axios:
al caricamento della pagina axios chiederà,
attraverso una chiamata api,
i dischi a php e li stamperà attraverso vue.
 */
include "assets/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/script.js" defer></script>
    <title>Php-Dischi</title>
</head>

<body>
    <div id="app">
        <div class="container-fluid bg-grey py-3">
            <img class="logo" src="./assets/logo-small.svg" alt="spotifyLogo" />
        </div>
        <div class="main container-fluid bg-main">
            <div class="container">
                <div class="text-center py-2">
                    <label class="c-white">Seleziona il genere: </label>
                    <select @change="sendGenre($event)">
                        <option value="">all</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Metal">Metal</option>
                        <option value="Jazz">Jazz</option>
                    </select>
                </div>
                <div class="row justify-content-between align-content-center gy-4">
                    <?php
                    foreach ($arrayDischi as $disco) {
                        echo ('<div class="lp-card bg-grey text-center d-flex flex-column justify-content-between align-content-center">
                        <div class="py-3">');
                        echo ('<img class="cardImg w-75" src="' . $disco["poster"] . '"alt="immagine" />');
                        echo ('<h2 class="m-0 w-100 c-white">' . $disco["title"] . '</h2> </div>');
                        echo (' <div class="d-flex flex-wrap w-100">
                        <div class="d-flex flex-column align-self-end justify-content-center w-100">');
                        echo (' <h4 class="c-grey m-0">' . $disco["author"] . '</h4>');
                        echo ('  <span class="c-grey">' . $disco["year"] . '</span></div></div></div>');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>