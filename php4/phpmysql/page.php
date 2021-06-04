<?php
   require_once "db.php";
   if(isset($_GET['action']) && $_GET['action']=="insert"){
       include "actions/insert.php";
   }elseif(isset($_GET['action']) && $_GET['action']=="delete"){
       include "actions/delete.php";
   }elseif(isset($_GET['action']) && $_GET['action']=="update"){
        include "actions/update.php";
   }else{
       include  "actions/select.php";
   }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <div><a href="page.php">SELECT</a></div>
        <div><a href="?action=insert">INSERT</a></div>
        <div><a href="?action=delete">DELETE</a></div>
        <div><a href="?action=update">UPDATE</a></div>
    </div>
    <?php
        if(isset($_GET['action']) && $_GET['action']=="insert"){
            include "actions/insert_form.php";
        }elseif(isset($_GET['action']) && $_GET['action']=="delete"){
            include  "actions/delete_form.php";
        }elseif(isset($_GET['action']) && $_GET['action']=="update"){
            include "actions/update_form.php";
        }else{
            include  "actions/select_form.php";
        }
    ?>
</body>
</html>