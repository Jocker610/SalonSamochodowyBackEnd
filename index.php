
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Salon Samochodowy</title>
    
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="js/timer.js"></script>
    <script src="jq/probna.js"></script>
    
    <script  src="jq/jquery-3.6.0.min.js"></script>
    
    
</head>


<body onload="odliczanie();">
    <!--nawigacja -->
    <div >
        
        <div class="upimg" style="float:right;">
        <a href="https://www.facebook.com/profile.php?id=100004892554217"><img src="img/facebook.png" alt="Facebook salonu"></a>
        <a href="https://www.instagram.com/marektoidiota/"><img src="img/instagram.png" alt="Instagram salonu"></a>
        <a href="https://twitter.com/BlaackJaackk"><img src="img/twitter.png" alt="Twitter salonu"></a>
        </div>
        <div class="upimg dropdown" style="float:left;">
            <?php include 'php/login.php';?>
            <button class="dropbtn"><img src="img/settingspng.png"></button>
            <div class="dropdown-content">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin login</button>
                <div id="id01" class="modal">
                        
                    <form class="modal-content animate" name="f1" action="authentication.php"  onsubmit = "return validation()" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <label for="usermname"><b>Login</b></label>
                            <input autocomplete="off" type="text" placeholder="Wpisz login" id ="user" name  = "user"  required>
                            
                            <label for="pass"><b>Hasło</b></label>
                            <input autocomplete="off" type="password" placeholder="Wpisz hasło" id ="pass" name  = "pass" required>
                                
                            <button class="loginbtn" id = "btn" type="submit">Login</button>
                            
                        </div>

                        <div class="container" style="background-color:black">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>


    </div>
<nav>
    <ul class="up">
        
        
        
            <a href="oferta.php"><h2>OFERTA</h2></a>
            <a href="oNas.php"><h2>O NAS</h2></a>
            <a href="kontakt.php"><h2>KONTAKT</h2></a>
            <a href="Galeria.php"><h2>GALERIA</h2></a>
        
        
    </ul>
       
    
        
</nav>
    <!--koniec nawigacji -->

<p><?php echo !empty($errormsg)? $errormsg:''; ?></p>

<header class="glowna">
    
    <div>
        <h1>Salon samochodowy SEAT-a</h1>

        <div>
            <article>
                
                <p class="akapit">Witam na stronie autoryzowanego salonu marki 
                    SEAT w Opolu. Opolski Dealer pod nazwą SeatPol Opole 
                    prowadzi sprzedaż samochodów nowych oraz używanych. Firma jest prowadzona
                    przez doświadczone osoby z wieloletnim doświadczeniem w miechanice
                    samochodowej oraz fanów marki saochodowej jaką jest SEAT.</p>
            </article>
    
            <a href="oNas.php"><p class="seemore">Dowiedz się wiecej o nas</p></a>
            
        </div>
           
    </div>
    
    <img class="mainimg1" src="img/cupra.jpg" alt="">
</header>


<section  class="glowna">

    <img class="mainimg" src="img/cupra2.jpg" alt="">
    
    <div>
        
        

        <div>
            <article>
                
                <p class="akapit">W naszej bogatej ofercie mamy do 
                    zaoferowania najnowsze modele SEAT-a, zaczynając od 
                    miejskich i małych Ibiz, kończąc na SUV'ach z dużą mocą.
                    Mamy również do zaoferowania pojazdy dla fanów starszych generacji SEAT-a
                    np. Leona, pierwszej generacji w wersji Cupra.
                    </p>
            </article>
    
            <a href="oferta.php"><p class="seemore1">Pokaż ofertę</p></a>
            
            
            
        </div>
           
    </div>
    
    
</section>

<section class="button">
    <div>
        
        <a href="kontakt.php"><button id="testAnim6"><h2 >UMÓW SIĘ NA JAZDĘ PRÓBNĄ</h2></button></a>
        <script src="jq/probna.js"></script>
        
    </div>
    
</section>

    <section >
        <div class="timer" id="zegar"></div> 
    </section>




</body>
</html> 


