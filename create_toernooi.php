<?php
if(count($_POST)>0) {
	require_once("../config.php");
	$sql = "INSERT INTO toernooi (Omschrijving, Datum) VALUES ('" . $_POST["Omschrijving"] . "','" . $_POST["Datum"] ."')";
	mysqli_query($link,$sql);
	$current_id = mysqli_insert_id($link);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
        header("location: ../toernooi.php");
	}
}
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<form method="POST" action="">
	<div style="width:500px;">
		<div style="padding-bottom:5px;"><a href="../toernooi.php" class="btn btn-info link"> Toernooi</a></div>
		<table >
			<tr class="tableheader">
				<td colspan="2"><h2>Add New Toernooi</h2></td>
			</tr>
			<tr>
				<td><label>Omschrijving</label></td>
				<td><input type="text" name="Omschrijving" class="txtField"></td>
			</tr>
			<tr>
				<td><label>Datum</label></td>
				<td><input type="date" name="Datum"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
	</div>
</form>
</html>