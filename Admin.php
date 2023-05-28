<?php
session_start();
$email_address= $_SESSION['username'];
if(empty($email_address))
{
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <script type="text/javascript" src="js/timer.js"></script>
    <script src="jq/jquery-3.6.0.min.js"></script>
    <script src="jq/walidacja.js"></script>
    
    
</head>


<body onload="odliczanie();">
    
    
<nav>
   <div>
    <br>
    <ul class="up">
 
 <a href="dodaj.php"><h2>Dodaj</h2></a>
 <a href="usun.php"><h2>Usuń</h2></a>
 <a href="podglad.php"><h2>Podgląd</h2></a>
 <a href="index.php"><h2>Wróć na stronę główną</h2></a>
 

</ul>
   </div>
       
    
        
</nav>

<div>
<img class="rounded mx-auto d-block" src="img/2206248.png">
</div>

<section >
        <div class="timer" id="zegar"></div> 
    </section>
</body>
</html> 