<?php
if(count($_POST)>0) {
	require_once("../config.php");
	$sql = "INSERT INTO school (Naam) VALUES ('" . $_POST["Naam"] . "')";
	mysqli_query($link,$sql);
	$current_id = mysqli_insert_id($link);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
        header("location: ../scholen.php");
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
				<td colspan="2"><h2>Add New School</h2></td>
			</tr>
			<tr>
				<td><label>Naam</label></td>
				<td><input type="text" name="Naam" class="txtField"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
	</div>
</form>
</html>