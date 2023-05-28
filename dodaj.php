<?php
include("dodajdane.php");
?>
<?php
session_start();
$username= $_SESSION['username'];
if(empty($username))
{
  header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
 
            <a href="Admin.php"><h2>Admin</h2></a>
            <a href="usun.php"><h2>Usuń</h2></a>
            <a href="podglad.php"><h2>Podgląd</h2></a>
            
 
    </ul>
    </div>
       
    
        
</nav>
<div class="container">
 <div class="row text-center" >
  <div class="col-sm-4">

  </div>
   <div class="col-sm-4">
    
    <p><?php echo !empty($result)? $result:''; ?></p>
       
      <form enctype="multipart/form-data" method="post" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Model" name="model">
       </div>
     
     
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Rok produkcji" name="rokprodukcji">
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Silnik" name="silnik">
       </div>
        <div class="form-group">
       
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cena" name="cena">
       </div>
       <textarea class="form-control" placeholder="opis" name="opis"></textarea>
        <div class="form-group">
          <input type="file" class="form-control" placeholder="Zdjęcie" name="zdjecie">
       </div>
 
  <button type="submit"  name="save" class="btn btn-primary">Zapisz</button>
  </form>
    
   </div>
   <div class="col-sm-4">

</div>
   </div>
</div>

<section >
        <div class="timer" id="zegar"></div> 
    </section>
</body>
</html>