<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user_query = "SELECT * FROM users WHERE id='$id'";
        $stmt = $conn->prepare($user_query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll();
?>
    <form method="post">
        <h2>UPDATE</h2>
        <input type="text" name="firstname" value="<?=$user[0]['firstname']?>"> - Firstname
        <br><br>
        <input type="text" name="lastname" value="<?=$user[0]['lastname']?>"> - Lastname
        <br><br>
        <input type="number" name="age" value="<?=$user[0]['age']?>"> - Age
        <br><br>
        <input type="hidden" name="id" value="<?=$user[0]['id']?>">
        <button name="update">UPDATE</button>
    </form>
<?php
    }
?>
<div class="select">
    <?php
        select($conn);
    ?>
</div>
