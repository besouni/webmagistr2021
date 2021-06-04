<?php
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
        echo "<a href='?action=update&id=".$item['id']."'>UPDATE</a>";
        echo "</div>";
    }
}

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $age = $_POST['age'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $sql_edit = "UPDATE users SET firstname='$first_name', 
                                          lastname='$last_name', 
                                          age='$age' WHERE id='$id'";
        $conn->exec($sql_edit);
    }
?>

