<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="NokaCSS.css">

    <!-- link fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color: #1b1b1bf5;">
    <div class="header">
        <nav class="navbar">
            <a href="/Main" class="header-logo">
                <img src="./picture references/Vector.png" class="logo">
                <p class="label">
                Noka 3
                </p>
            </a>

            <div class="menu-mobile" id="mobilemenu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <a href="#"><img src="./picture references/skew.png" class="skewed"></a>

            <ul class="navmenu">
                <li><a href="/Register" class="navlink houseshape">Register</a></li>
                <li><a href="/News" class="navlink">News</a></li>
                <li><a href="/Heroes" class="navlink">Heroes</a></li>
                <li><a href="/Esports" class="navlink">Esports</a></li>
                <li><a target="_blank" href="https://store.steampowered.com/" class="navlink navdownload">DOWNLOAD</a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <h1>
            "WORLDWIDE COMPETITIVE GAMEPLAY"
        </h1>

        <h2>
            -GRANDMASTER
        </h2>

        <div class="container">
            <a href="#" class="picturecontent"> 
                <img src="./picture references/main page/data.jpg" class="itempicture">
                <p>During the week the number of downloads for NoKa 3 has reached 1 million.</p>
            </a>
        
            <a href="#" class="picturecontent">
                <img src="./picture references/main page/coin.jpg" class="itempicture">
                <p>Big discount for noka coin !! BUY IT NOW !!</p>
            </a>

            <a href="#" class="picturecontent">
                <img src="./picture references/main page/heromain.jpg" class="itempicture">
                <p>NEW HEROES ARRIVAL!!!</p>
            </a>

            <a href="/Esports" class="matchnews">
                <img src="./picture references/esports/match.jpg" class="matchpicture">
            </a>
        </div>
    </div>
</body>

<script src="NokaMobile.js"></script>

</html>