<?php
require_once '../config.php';

$sql = "DELETE FROM school WHERE id='" . $_GET['ID'] ."' ";


if(mysqli_query($link, $sql)) {
    echo "Delete succes";
} else {
    echo "Error";
}

mysqli_close($link);

header("Location:../scholen.php");


?>