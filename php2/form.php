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
    <form method="post">
        <input type="text" name="firstname"> - Firstname
        <br><br>
        <input type="text" name="lastname"> - Lastname
        <br><br>
        <input type="number" name="age"> - Age
        <br><br>
        <button name="insert">INSERT</button>
    </form>
    <div class="select">
        <?php
           select($conn);
        ?>
    </div>
</body>
</html>
