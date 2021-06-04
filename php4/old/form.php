<?php
    include "page.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_GET['action'])&&$_GET['action']="edit")
        {
            $id = $_GET['id'];
            $user_query = "SELECT * FROM users WHERE id='$id'";
            $stmt = $conn->prepare($user_query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll();
    ?>
    <form method="post">
        <h2><a href="form.php">SELECT</a> </h2>
        <input type="text" name="firstname" value="<?=$user[0]['firstname']?>"> - Firstname
        <br><br>
        <input type="text" name="lastname" value="<?=$user[0]['lastname']?>"> - Lastname
        <br><br>
        <input type="number" name="age" value="<?=$user[0]['age']?>"> - Age
        <br><br>
        <input type="hidden" name="id" value="<?=$user[0]['id']?>">
        <button name="edit">EDIT</button>
    </form>
    <?php
        }else{
    ?>
    <form method="post">
        <h2><a href="form.php">SELECT</a> </h2>
        <input type="text" name="firstname"> - Firstname
        <br><br>
        <input type="text" name="lastname"> - Lastname
        <br><br>
        <input type="number" name="age"> - Age
        <br><br>
        <button name="insert">INSERT</button>
    </form>
    <?php
        }
    ?>
    <div class="select">
        <?php
           select($conn);
        ?>
    </div>
</body>
</html>
