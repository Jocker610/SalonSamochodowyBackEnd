<?php
include("connection.php");

$db= $conn;
$tableName="danesamochodu";
$columns= ['ID', 'model','rokprodukcji','silnik','cena','opis', 'zdjecie'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
   if(empty($db)){
      $msg= "Błąd bazy danych";

      }
      else
      {

         $columnName = implode(", ", $columns);
         $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
         $result = $db->query($query);

         if($result== true){ 
         if ($result->num_rows > 0) 
               {
                  $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                  $msg= $row;
               } else {
                  $msg= "Brak samochodów w ofercie"; 
               }
               }else{
               $msg= mysqli_error($db);
            }
      }
   return $msg;
}
?>