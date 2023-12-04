<?php
$servername = "sql";
$username = "root";
$password = "zitrone";
$sql_fetch = "SELECT posts.ID, posts.content, user.user_name FROM `posts` LEFT JOIN `user` ON posts.post_id=user.ID ORDER BY `posts`.`ID` DESC ";
try {
    $conn = new PDO("mysql:host=$servername;dbname=user", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $sql_insert = "INSERT INTO `posts`(`post_id`, `content`) VALUES ('" . trim($_POST["user"]) . "','" . trim($_POST["content"]) . "')";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        echo("<script>location.href='/chat.php';</script>");
    }else{
        $stmt = $conn->prepare($sql_fetch);
        $stmt->execute();
        $result = $stmt->fetchAll();
        echo(json_encode(['obj' => $result]));
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
