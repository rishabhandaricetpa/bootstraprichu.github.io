<?php
$conn = new PDO("mysql:host=localhost; dbname=pdodb;", "root", "");
try {
    //PREPARED STATEMENT
    $sql = "SELECT * FROM pdo";
    $result = $conn->prepare($sql);
    $result->execute();;

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] .  " <br/>" . $row['name'] . "<br/> " . $row['design'];
    }
} catch (PDOException $e) {
    echo $e;
}
