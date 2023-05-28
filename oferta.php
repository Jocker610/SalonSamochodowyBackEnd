<?php
include("dane.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Salon Samochodowy</title>
    <link rel="stylesheet" href="css/oferta.css">
    <script type="text/javascript" src="js/timer.js"></script>
</head>

<!--nawigacja -->
<div class="upimg">
    <a href=""><img src="img/settings.png" alt=""></a>
    <a href="https://www.facebook.com/profile.php?id=100004892554217"><img src="img/facebook.png" alt="Facebook salonu"></a>
    <a href="https://www.instagram.com/marektoidiota/"><img src="img/instagram.png" alt="Instagram salonu"></a>
    <a href="https://twitter.com/BlaackJaackk"><img src="img/twitter.png" alt="Twitter salonu"></a>

</div>
<nav>
<ul class="up">
    
    
        <a href="index.php"><h2>SEATPOL</h2></a>
        <a href="oNas.php"><h2>O NAS</h2></a>
        <a href="kontakt.php"><h2>KONTAKT</h2></a>
        <a href="Galeria.php"><h2>GALERIA</h2></a>
    
    
</ul>

</nav>
<!--koniec nawigacji -->
<body onload="odliczanie();">

    <header>
        <h1>Nasza aktulana oferta</h1>
        <a href="kontakt.php"><h5>(Po więcj informacji skontaktuj się z nami)</h5></a>
    </header>

    
    <div class="container">
 <div class="row">
   <div class="col">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table style="color: orange;" class="table table-bordered">
       <thead><tr>
         <th>Model:</th>
         <th>Rok produkcji:</th>
         <th>Silnik:</th>
         <th>Cena:</th>
         <th>Opis</th>
         <th> </th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      
      <td width="10%"><?php echo $data['model']??''; ?></td>
      <td width="5%"><?php echo $data['rokprodukcji']??''; ?></td>
      <td width="15%"><?php echo $data['silnik']??''; ?></td>
      <td width="10%"><?php echo $data['cena']??''; ?></td>
      <td width="30%"><?php echo $data['opis']??''; ?></td>
      <td width="30%"><img width="400" src="img/<?php echo $data['zdjecie']??''; ?>" alt="..."></td>
      
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
        

    <section>
        <div class="timer" id="zegar"></div> 
    </section>
</body>
</html> 