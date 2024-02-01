<?php 

include "config.php"; 

if (isset($_GET['ID'])) {

    $user_id = $_GET['ID'];

    $sql = "DELETE FROM `stock` WHERE `ID`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>