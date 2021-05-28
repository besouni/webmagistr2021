<?php
   $host = "localhost";
   $db = "webdb";
   $user = "root";
   $password = "";
   try{
       $conn = new PDO("mysql:host=$host; dbname=$db", $user,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       /*
       $sql = "CREATE TABLE users(
                            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            firstname VARCHAR (50) NULL,
                            lastname VARCHAR (50) NULL,
                            age INT(3) NULL )";
       $conn->exec($sql);
       */
   }catch (PDOException $e){
       echo $e->getMessage();
   }

   if(isset($_POST['insert'])){
       $first_name = $_POST['firstname'];
       $last_name = $_POST['lastname'];
       $age = $_POST['age'];
       $sql_insert = "INSERT INTO users(firstname, lastname, age) 
                      VALUES ('$first_name', '$last_name', '$age')";
       $conn->exec($sql_insert);
       header("location:form.php");
   }

   function select(PDO $conn){
       $sql_select = "SELECT * FROM users ORDER BY id desc";
       $stmt = $conn->prepare($sql_select);
       $stmt->execute();
       $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $result = $stmt->fetchAll();
       /*
       echo "<pre>";
       print_r($result);
       echo "</pre>";
       */
       foreach ($result as $item){
           echo "<div class='user'>";
           echo "<div>".$item['firstname']."</div>";
           echo "<div>".$item['lastname']."</div>";
           echo "<div>".$item['age']."</div>";
           echo "</div>";
       }
   }

//   select($conn);
?>