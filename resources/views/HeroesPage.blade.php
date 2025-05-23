<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Page</title>

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

    <div class="hero-container">
        <a href="#" class="hero" onclick="document.getElementById('hero1').style.display='block' ">
            <img src="./picture references/heroes/fortress.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Fortress
                </p>

                <p class="herorole">
                    Fighter
                </p>

                <img src="./picture references/hero logo/fighter.png" class="logohero">
            </div>
        </a>

        <div class="detail-background animate" id="hero1">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/fortress.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Fortress</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/fighter_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero1').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk1-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk1-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk1-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk1-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/fortress/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/fortress/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/fortress/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/fortress/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>



        <a href="#" class="hero" onclick="document.getElementById('hero2').style.display='block' ">
            <img src="./picture references/heroes/fizz.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Fizz
                </p>

                <p class="herorole">
                    Mage
                </p>
                <img src="./picture references/hero logo/mage.png" class="logohero">
            </div>
        </a>

        <div class="detail-background animate" id="hero2">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/fizz.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Fizz</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/mage_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero2').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk2-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk2-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk2-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk2-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/fizz/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/fizz/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/fizz/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/fizz/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero3').style.display='block' ">
            <img src="./picture references/heroes/phinn.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Phinn
                </p>

                <p class="herorole">
                    Tank
                </p>
                <img src="./picture references/hero logo/tank.png" class="logohero">
            </div>
        </a>

        <div class="detail-background animate" id="hero3">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/phinn.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Phinn</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/tank_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero3').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk3-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk3-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk3-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk3-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/phinn/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/phinn/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/phinn/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/phinn/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero4').style.display='block' ">
            <img src="./picture references/heroes/taka.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Taka
                </p>

                <p class="herorole">
                    Assassin
                </p>
                <img src="./picture references/hero logo/assassin.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero4">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/taka.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Taka</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/assassin_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero4').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk4-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk4-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk4-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk4-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/taka/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/taka/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/taka/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/taka/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero5').style.display='block' ">
            <img src="./picture references/heroes/adagio.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Adagio
                </p>

                <p class="herorole">
                    Support
                </p>
                <img src="./picture references/hero logo/support.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero5">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/adagio.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Adagio</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/support_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero5').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk5-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk5-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk5-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk5-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/adagio/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/adagio/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/adagio/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/adagio/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero6').style.display='block' ">
            <img src="./picture references/heroes/pudge.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Pudge
                </p>

                <p class="herorole">
                    Tank
                </p>
                <img src="./picture references/hero logo/tank.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero6">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/pudge.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Pudge</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/tank_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero6').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk6-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk6-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk6-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk6-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/pudge/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/pudge/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/pudge/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/pudge/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero7').style.display='block' ">
            <img src="./picture references/heroes/ringo.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Ringo
                </p>

                <p class="herorole">
                    Fighter
                </p>
                <img src="./picture references/hero logo/fighter.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero7">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/ringo.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Ringo</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/fighter_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero7').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk7-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk7-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk7-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk7-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/ringo/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/ringo/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/ringo/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/ringo/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero8').style.display='block' ">
            <img src="./picture references/heroes/koska.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Koska
                </p>

                <p class="herorole">
                    Assassin
                </p>
                <img src="./picture references/hero logo/assassin.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero8">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/koska.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Koska</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/assassin_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero8').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk8-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk8-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk8-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk8-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/koska/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/koska/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/koska/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/koska/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero9').style.display='block' ">
            <img src="./picture references/heroes/rona.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Rona
                </p>

                <p class="herorole">
                    Fighter
                </p>
                <img src="./picture references/hero logo/fighter.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero9">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/rona.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Rona</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/fighter_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero9').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk9-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk9-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk9-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk9-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/rona/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/rona/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/rona/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/rona/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <a href="#" class="hero" onclick="document.getElementById('hero10').style.display='block' ">
            <img src="./picture references/heroes/flicker.png" class="heropic">
            <div class="herodesc">
                <p class="heroname">
                    Flicker
                </p>

                <p class="herorole">
                    Mage
                </p>
                <img src="./picture references/hero logo/mage.png" class="logohero">
            </div>
            
        </a>

        <div class="detail-background animate" id="hero10">
            <div class="detail-container">
                <div class="detailpic-container">
                    <img src="./picture references/heroes/flicker.png" class="detailpic">
                </div>
                <div class="detail">
                    <div class="herotitle-container">
                        <div class="herotitle">
                            <span>Flicker</span>
                        </div>
                        
                        <div class="herotitle-pic">
                            <img src="./picture references/hero logo/mage_circle.png" class="circlelogo">
                        </div>
                    </div>

                    <div class="detail-close">
                        <span onclick="document.getElementById('hero10').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="hero-detail">
                        <p>OFFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk10-1"></div>
                        </div>

                        <p>DEFENSE</p>
                        <div class="containerbar">
                        <div class="skills sk10-2"></div>
                        </div>

                        <p>TEAM UTILITY</p>
                        <div class="containerbar">
                        <div class="skills sk10-3"></div>
                        </div>

                        <p>MOBILITY</p>
                        <div class="containerbar">
                        <div class="skills sk10-4"></div>
                        </div>

                        <div class="skill-container">
                            <img src="./picture references/skill logo/flicker/1.png" class="skill-logo">
                            <img src="./picture references/skill logo/flicker/2.png" class="skill-logo">
                            <img src="./picture references/skill logo/flicker/3.png" class="skill-logo">
                            <img src="./picture references/skill logo/flicker/4.png" class="skill-logo">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
<script src="NokaMobile.js"></script>
<script src="NokaHerPopUp.js"></script>
</html>