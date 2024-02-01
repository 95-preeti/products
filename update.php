<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $user_id = $_POST['user_id'];

        $description = $_POST['description'];

        $price = $_POST['price'];

        $quantity = $_POST['quantity']; 

        $sql = "UPDATE `stock` SET `name`='$name' `description`='$description',`price`='$price',`quantity`='$quantity' WHERE `ID`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['ID'])) {

    $user_id = $_GET['ID']; 

    $sql = "SELECT * FROM `stock` WHERE `ID`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $description = $row['description'];

            $price = $row['price'];

            $quantity = $row['quantity'];

            $id = $row['ID'];

        } 

    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Update form</title>
    </head>
    <body>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>product information:</legend>

             name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            description:<br>

            <input type="text" name="description" value="<?php echo $description; ?>">

            <br>

            price:<br>

            <input type="text" name="price" value="<?php echo $price; ?>">

            <br>

            quantity:<br>

            <input type="radio" name="quantity"value="<?php echo $quantity; ?>">

            

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

   } else{ 

        header('Location: view.php');

    } 

}
?>