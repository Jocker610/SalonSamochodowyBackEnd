
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Salon Samochodowy</title>
    <link rel="stylesheet" href="css/kontakt.css">
    <script type="text/javascript" src="js/timer.js"></script>
    <script src="jq/jquery-3.6.0.min.js"></script>
    <script src="jq/walidacja.js"></script>
    
    
</head>


<body onload="odliczanie();">
    <!--nawigacja -->
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
            <a href="Galeria.php"><h2>GALERIA</h2></a>
 
    </ul>
       
    
        
</nav>
<section>
    <h1>Kontakt</h1>
    <h2>Zapraszamy do</h2>
    <h3>Spotkania z doradcą w salonie na ulicy:</h3>
        <h4 >
        
            <p >Prószkowska 76, Opole 45-758</p>
            
        </h4>
    <h3>Kontaktu telefonicznego pod numerem:</h3>
        <h4>
            <p>+48 123 456 789</p>
        </h4>
    <h3 style="text-align: center;">Oraz do kontaktu mailowego:</h3>
        
    
</section>
    
<form action="" method="post">
<div class="container">
    
  
    <div>
      <input type="text" id="imie" name="imie" placeholder="Imię">
    </div>
    <div>
      <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko">
    </div>
    <div>
      <input type="email" id="email" name="email" placeholder="Twój Email">
    </div>
    

    <div>
      <textarea id="wiadomosc" name="wiadomosc" placeholder="" style="height:200px"></textarea>
    </div>

    <div>
    <button type="submit">Wyślij</button>
    </div>

  
</div>
</form>


<section>
    <div class="timer" id="zegar"></div> 
</section>



</body>
</html> 

<?php 
if(isset($_POST['submit'])){
    $to = "jocker610@gmail.com";
    $from = $_POST['email']; 
    $first_name = $_POST['imie'];
    $last_name = $_POST['nazwisko'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['wiadomosc'];
    $message2 = "Tutaj jest Twoja kopia wiadomości " . $first_name . "\n\n" . $_POST['wiadomosc'];

    $headers = "Od:" . $from;
    $headers2 = "Od:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail został wysłany " . $first_name . ", Dziękujemy za kontakt.";
   
    }
?>

