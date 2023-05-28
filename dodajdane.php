<?php
	include("connection.php");
	
	extract($_POST);
	if (isset($save)) {
		$inputData = [
		'zdjecie' => validate($_FILES['zdjecie']['name']) ?? "",
		'model'   => validate($model) ?? "",
		'rokprodukcji'    => validate($rokprodukcji) ?? "",
		'silnik'   => validate($silnik) ?? "",
        'cena'   => validate($cena) ?? "",
        'opis'   => validate($opis) ?? "",
		];
		if (is_uploaded_file($_FILES['zdjecie']['tmp_name'])) {
			move_uploaded_file(($_FILES['zdjecie']['tmp_name']), $_SERVER['DOCUMENT_ROOT'].'/salonsamochodowy/img/'.$_FILES['zdjecie']['name']);
		}
		$tableName= "danesamochodu";
		$db = $conn;
		$result= insert_data($db, $tableName, $inputData);
	}
	function insert_data($db, $tableName, $inputData){
		$data = implode(" ",$inputData);
		if (empty($db)) {
			$msg= "Błąd połączenia z bazą danych";
		}
		else {
			$query  = "INSERT INTO ".$tableName." (";
			$query .= implode(",", array_keys($inputData)) . ') VALUES (';
			$query .= "'" . implode("','", array_values($inputData)) . "')";
			$execute= $db->query($query);
			if ($execute == true) {
				$msg= "Samochód został dodany do oferty";
			}
			else {
				$msg= mysqli_error($db);
			}
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