<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>

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

    <!-- <div class="news">
        <div class="news-container">
            <div class="news-content">
                <img src="./picture references/News/news1.png" class="news-picture">
                <a href="/News/1" class="text-container">
                    <p class="headertext">Today</p>
                    <p class="text">New Heroes Update “ Arkan “ 
                        The Guarian Temple of the West!</p>
                    </a>
            </div>

            <div class="news-content">
                <img src="./picture references/News/map.jpg" class="news-picture">
                <a href="/News/2" class="text-container">
                    <p class="headertext">Yesterday</p>
                    <p class="text">New Jungle Crawlers appearance!</p>
                </a>
            </div>

            <div class="news-content">
                <img src="./picture references/News/person.jpg" class="news-picture">
                <a href="/News/3" class="text-container">
                    <p class="headertext">May 18th</p>
                    <p class="text">Developer want a whole new arena model!</p>
                </a>
            </div>

            <div class="news-content">
                <img src="./picture references/News/mapbaru.jpg" class="news-picture">
                <a href="/News/4" class="text-container">
                    <p class="headertext">Apr 7th</p>
                    <p class="text">Coming Soon 5 vs 5 Arena model!</p>
                </a>
            </div>
        </div>
    </div> -->

    <div class="news">
        @foreach ($news as $news)
        <div class="news-container">
            <div class="news-content">
                <img src=" {{ $news->imageLinkHeader }} " class="news-picture">
                <a href="/News/{{ $news->id }}" class="text-container">
                    <p class="headertext">{{ $news["title"] }} </p>
                    <p class="text"> {{ $news["excerpt"] }} </p>
                    </a>
            </div>
        </div>
        @endforeach
    </div>

    
</body>
<script src="NokaMobile.js"></script>
</html>