<?php
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $sql="INSERT INTO `stock`(`name`,`description`,`price`,`quantity`) VALUES('$name','$description','$price','$quantity')";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        echo "New record created succesfully.";
    }
    else{
        echo "Error.". $sql."<br />".$conn->connect_error;
    }
    $conn->close();
}
?>




<!DOCTYPE html>
<html>
<body>
    <h1>form</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>product Information</legend>
             name: <br>
                <input type="text" name="name" >
                <br>
            decsription: <br>
                    <input type="text" name="description" >
                    <br>
            price: <br>
                <input type="text" name="price" >
                <br>
            quantity:
                <input type="radio" name="quantity" >
                
                <br><br>
                <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>