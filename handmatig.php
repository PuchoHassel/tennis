<?php
include_once 'config.php';
include 'header.php';

$result = mysqli_query($link, "SELECT * FROM aanmelding");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Scholen</title>
</head>
<body>

<?php
    if(mysqli_num_rows($result) > 0){
        ?>

        <table class="table w-75">

        <tr>
            <th>Speler</th>
            <th>School</th>
            <th>Toernooi</th>
            <td><a href="CRUD/create_school.php" class="btn btn-success link"> New aanmelding</a></div>
		</td>
            
        <?php 
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["Naam"]; ?></td>
                <td><?php echo $row["school"]; ?></td>
                <td><?php echo $row[""]; ?></td>
                <td><a href="CRUD/update_school.php?ID=<?php echo $row["ID"]; ?>" class="btn btn-info">Update</a>
                    <a href="CRUD/delete_school.php?ID=<?php echo $row["ID"]; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
        </table>
        <?php
    } else{
        echo "No result";
    }
    ?>
</body>
</html>