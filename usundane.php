<?php
	include("connection.php");
	$db= $conn;
	$tableName="danesamochodu";
	if(isset($_GET['delete']))
	{
	  $id= validate($_GET['delete']);
	  $condition =['id'=>$id];
	  $result3=delete_data($db, $tableName, $condition);
	  header("location:podglad.php");
	}
	function delete_data($db, $tableName, $condition){
		$conditionData='';
		
		$i=0;
		foreach($condition as $index => $data){
			$and = ($i > 0)?' AND ':'';
			 $conditionData .= $and.$index." = "."'".$data."'";
			 
			 $i++;
		}
		
		
		
		$query= "DELETE FROM ".$tableName." WHERE ".$conditionData;
		$execute= $db->query($query);
		if($execute==true){
			$msg= "Samochód z oferty został usunięty";
		}else{
			$msg= mysqli_error($db);
		}
		return $msg;
	}
	function validate($value) {
	$value = trim($value);
	$value = stripslashes($value);
	$value = htmlspecialchars($value);
	return $value;
	}
?>