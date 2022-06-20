<?php
include_once '../config.php';

if(count($_POST)>0) {

	$sql = "UPDATE school SET ID='" . $_POST['ID'] . "', Naam='" . $_POST["Naam"]. "' WHERE ID='" . $_POST['ID'] ."'";
	mysqli_query($link,$sql);
	$message = "Record Modified Successfully";
    header('location: ../scholen.php');
}
$select_query = "SELECT * FROM school WHERE ID='" . $_GET["ID"] . "'";
$result = mysqli_query($link,$select_query);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<form method="POST" action="">
	<div style="width:500px;">
		<div style="padding-bottom:5px;"><a href="../scholen.php" class="btn btn-info link"> Scholen</a></div>
		<table >
			<tr class="tableheader">
				<td colspan="2"><h2>Add New School</h2></td>
			</tr>
            <tr>
                <input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
				<input type="hidden" name="ID"  value="<?php echo $row['ID']; ?>">
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