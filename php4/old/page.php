<?php
   $host = "localhost";
   $db = "webdb";
   $user = "root";
   $password = "";

   try{
       $conn = new PDO("mysql:host=$host; dbname=$db", $user,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }catch (PDOException $e){
       die ($e->getMessage());
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

    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
       $id = $_GET['id'];
       $sql_delete = "DELETE FROM users WHERE id='$id'";
       $conn->exec($sql_delete);
       header("location:form.php");
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $age = $_POST['age'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $sql_edit = "UPDATE users SET firstname='$first_name', 
                                      lastname='$last_name', 
                                      age='$age' WHERE id='$id'";
        $conn->exec($sql_edit);
    }

    function select(PDO $conn){
       $sql_select = "SELECT * FROM users ORDER BY id DESC";
       $stmt = $conn->prepare($sql_select);
       $stmt->execute();
       $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $result = $stmt->fetchAll();
       foreach ($result as $item){
           echo "<div class='user'>";
               echo "<div>".$item['firstname']."</div>";
               echo "<div>".$item['lastname']."</div>";
               echo "<div>".$item['age']."</div>";
               echo "<a href='?action=edit&id=".$item['id']."'>EDIT</a>";
               echo "<br>";
               echo "<a href='?action=delete&id=".$item['id']."'>DELETE</a>";
           echo "</div>";
       }
   }
?>