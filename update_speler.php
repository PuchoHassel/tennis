<?php
include_once '../config.php';

if(count($_POST)>0) {

	$sql = "UPDATE speler SET ID='" . $_POST['ID'] . "', Roepnaam='" . $_POST["Roepnaam"] . "', Achternaam='" . $_POST["Achternaam"] . "', tussenvoegsels='" . $_POST["tussenvoegsels"] ."', SchoolID='" . $_POST["SchoolID"] . "' WHERE ID='" . $_POST['ID'] ."'";
	mysqli_query($link,$sql);
	$message = "Record Modified Successfully";
    header('location: ../spelers.php');
}
$select_query = "SELECT * FROM speler WHERE ID='" . $_GET["ID"] . "'";
$result = mysqli_query($link,$select_query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="">
	<div><?php if(isset($message)) {echo $message;}?>
</div>
	<div style="width:500px;">
		<div style="padding-bottom:5px;"><a href="../spelers.php" class="link">Spelers</a></div>
		<table cellpadding="10" cellspacing="0" width="500" class="tblSaveForm">
			<tr class="tableheader">
				<td colspan="2"><h2>Update Eten</h2></td>
			</tr>
            <tr>
                <input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
				<input type="hidden" name="ID"  value="<?php echo $row['ID']; ?>">
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
				<td colspan="2"><input type="submit" name="submit" value="Save" class="btnSubmit"></td>
			</tr>
		</table>
	</div>
</form>
</html>
</body>
</html>