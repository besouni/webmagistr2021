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
        echo "</div>";
    }
}
?>