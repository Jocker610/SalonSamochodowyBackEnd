<?php
include("usundane.php");
include("dane.php");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Salon Samochodowy</title>
    <link rel="stylesheet" href="css/oferta.css">
    <script type="text/javascript" src="js/timer.js"></script>
</head>
<nav>
<div>
      <br>
      <ul class="up">
            <a href="Admin.php"><h2>Admin</h2></a>
            <a href="dodaj.php"><h2>Dodaj</h2></a>
            
            <a href="podglad.php"><h2>Podgląd</h2></a>
            
 
    </ul>
    </div>

</nav>
<!--koniec nawigacji -->
<body onload="odliczanie();">

    

    
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
         <th>Usuń</th>
         
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
      <td width="7%"><a href="usundane.php?delete=<?php echo $data['ID']; ?>" class="btn btn-danger">Delete</a></td>
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