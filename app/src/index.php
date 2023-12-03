a<?php
    session_start();
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatRoom | Log-in</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./icon/icon.svg">
</head>
<body>
<?php
    if(isset($_POST["pw"], $_POST["user"])){
        $pw = hash('sha256', $_POST["pw"]);
        $user = $_POST["user"];
        $servername = "sql";
        $username = "root";
        $password = "zitrone";
        $sql = "SELECT * FROM user WHERE user_name='".$user."'";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=user", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll()[0];
            var_dump($result);
            if($result["passwort"]==$pw){
                $_SESSION["aktiveUser"][]=$user;
                $_SESSION["UID"] = $result["ID"];
                echo("<script>location.href='/chat.php';</script>");
            }else{
                echo("<h2 class='err'> Nutzer Daten stimmen nicht Überein </h2>");
            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

?>
<div class="contentLimiter">
    <header>
        <img src="icon/icon.svg">
        <h1>Log-In </h1>
    </header>
    <div>
        <form action="" method="post">
            <input type="text" placeholder="Nutzername" name="user">
            <input type="password" placeholder="Passwort" name="pw">
            <input type="submit" value="Einloggen">
        </form>
    </div>
    <a href="registrierung.php">Registrieren</a>
</div>
</body>
</html>
