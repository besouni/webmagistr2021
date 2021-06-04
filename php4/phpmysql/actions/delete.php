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
        echo "<a href='?action=delete&id=".$item['id']."'>DELETE</a>";
        echo "</div>";
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_delete = "DELETE FROM users WHERE id='$id'";
    $conn->exec($sql_delete);
}
?>
