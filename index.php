<?php
$arrayDischi = [
    [
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
        "title" => "New Jersey",
        "year" => "1988",
    ],
    [
        "author" => "Queen",
        "genre" => "Pop",
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "Live at Wembley 86",
        "year" => "1992",
    ],
    [
        "author" =>  "Sting",
        "genre" => "Pop",
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "title" => "Ten's Summoner's Tales",
        "year" => "1993",
    ],
    [
        "author" => "Steve Gadd Band",
        "genre" => "Jazz",
        "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "title" => "Steve Gadd Band",
        "year" => "2018",
    ],
    [
        "author" => "Iron Maiden",
        "genre" => "Metal",
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "title" => "Brave new World",
        "year" => "2000",

    ],
    [
        "author" => "Eric Clapton",
        "genre" => "Rock",
        "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "title" => "One more car, one more raider",
        "year" => "2002",
    ],
    [
        "author" => "Deep Purple",
        "genre" => "Rock",
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
        "title" => "Made in Japan",
        "year" => "1972",
    ],
    [
        "author" => "Metallica",
        "genre" => "Metal",
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
        "title" => "And Justice for All",
        "year" => "1988",
    ],
    [
        "author" => "Dave Weckl",
        "genre" => "Jazz",
        "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
        "title" => "Hard Wired",
        "year" => "1994",
    ],
    [
        "author" => "Michael Jackson",
        "genre" => "Pop",
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title" => "Bad",
        "year" => "1987",
    ]
];
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
                        echo ('  <span class="c-grey">' . $disco["year"] . '</span></div></div> </div>');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>