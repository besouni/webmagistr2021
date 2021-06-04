<?php
    if(isset($_POST['insert'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $age = $_POST['age'];
        $sql_insert =   "INSERT INTO users(firstname, lastname, age) 
                          VALUES ('$first_name', '$last_name', '$age')";
        $conn->exec($sql_insert);
        header("location:page.php");
    }
?>