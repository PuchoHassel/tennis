<?php
require_once '../config.php';

$sql = "DELETE FROM speler WHERE id='" . $_GET['ID'] ."' ";


if(mysqli_query($link, $sql)) {
    echo "Delete succes";
} else {
    echo "Error";
}

mysqli_close($link);

header("Location:../spelers.php");


?>