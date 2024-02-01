<?php 

include "config.php";

$sql = "SELECT * FROM stock";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> name</th>

        <th>description</th>

        <th>price</th>

        <th>quantity</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['ID']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['description']; ?></td>

                    <td><?php echo $row['price']; ?></td>

                    <td><?php echo $row['quantity']; ?></td>

                    <td><a class="btn btn-info" href="update.php?ID=<?php echo $row['ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>