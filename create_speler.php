<?php
if(count($_POST)>0) {
	require_once("../config.php");
	$sql = "INSERT INTO speler (Roepnaam, Achternaam,tussenvoegsels, SchoolID) VALUES ('" . $_POST["Roepnaam"] . "','" . $_POST["Achternaam"] . "','" . $_POST["tussenvoegsels"] ."','" . $_POST["SchoolID"] . "')";
	mysqli_query($link,$sql);
	$current_id = mysqli_insert_id($link);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
        header("location: ../spelers.php");
	}
}
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<form method="POST" action="">
	<div style="width:500px;">
		<div style="padding-bottom:5px;"><a href="../spelers.php" class="btn btn-info link"> Spelers</a></div>
		<table >
			<tr class="tableheader">
				<td colspan="2"><h2>Add New Speler</h2></td>
			</tr>
			<tr>
				<td><label>Roepnaam</label></td>
				<td><input type="text" name="Roepnaam" class="txtField"></td>
			</tr>
			<tr>
				<td><label>Tussenvoegsels</label></td>
				<td><input type="text" name="tussenvoegsels"></td>
			</tr>
            <tr>
				<td><label>Achternaam</label></td>
				<td><input type="text" name="Achternaam"></td>
			</tr>
            <tr>
				<td><label>School</label></td>
				<td><select name="SchoolID">
                    <option value="1">ROC Zuidoost </option>
                    <option value="2">ROC Hilversum </option>
                    <option value="3">ROC Utrecht </option>
                    <option value="4">Graafschap College </option>
                    <option value="5">Drenthe College </option>
                    <option value="6">Rijn Ijssel College </option>
                    <option value="7">Albeda College </option>
                </select></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
	</div>
</form>
</html>