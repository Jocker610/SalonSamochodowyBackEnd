<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/galeria.css">
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
</head>


<body onload="odliczanie();">

    <div class="upimg">

        <a href="https://www.facebook.com/profile.php?id=100004892554217"><img src="img/facebook.png" alt="Facebook salonu"></a>
        <a href="https://www.instagram.com/marektoidiota/"><img src="img/instagram.png" alt="Instagram salonu"></a>
        <a href="https://twitter.com/BlaackJaackk"><img src="img/twitter.png" alt="Twitter salonu"></a>

    </div>
<nav>
    <ul class="up">
        
        
            <a href="index.php"><h2>SEATPOL</h2></a>
            <a href="oferta.php"><h2>OFERTA</h2></a>
            <a href="oNas.php"><h2>O NAS</h2></a>
            <a href="kontakt.php"><h2>KONTAKT</h2></a>
            
        
        
    </ul>
       
    
        
</nav>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="img/cupra.jpg" alt="" style="width:100%" onclick="myFunction(this);">
    <img src="img/LeonS.jpg" alt="" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/cupraS.jpg" alt="" style="width:100%"  onclick="myFunction(this);">
    <img src="img/leonN.jpg" alt="" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/cupra2.jpg" alt="" style="width:100%" onclick="myFunction(this);">
    <img src="img/ibizaS.jpg" alt="" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/cupra3.jpg" alt="" style="width:100%" onclick="myFunction(this);">
    <img src="img/IbizaN.jpeg" alt="" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<section>
    <div class="timer" id="zegar"></div> 
</section>

</body>
</html>
