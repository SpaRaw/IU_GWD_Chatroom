<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<div class="contentLimiter">
    <?php
        if(isset($_POST["pw"], $_POST["user"])){
            $pw = hash('sha256', $_POST["pw"]);
            $user = $_POST["user"];
            $servername = "sql";
            $username = "root";
            $password = "zitrone";
            $sql = "INSERT INTO `user`(`user_name`, `passwort`) VALUES (?, ?)";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=user", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare($sql);
                $stmt->execute([$user, $pw]);
                echo("<script>location.href='/'; </script>");
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    ?>
    <header>
        <img src="icon/icon.svg">
        <h1>Registrierung</h1>
    </header>
    <div class="reg">
        <form action="/registrierung.php" method="post">
            <input type="text" placeholder="Nutzername" name="user" id="user">
            <div class="pwInput">
                <div class="pw">
                    <div class="pw1">
                        <input type="password" placeholder="Passwort" name="pw" id="pw" on>
                        <div class="statusRow">
                            <div class="statusMSG err">8 Zeichen</div>
                            <div class="statusMSG err">Großbuchstaben</div>
                            <div class="statusMSG err">Sonderzeichen</div>
                        </div>
                    </div>
                    <div class="pw2">
                        <input type="password" placeholder="Passwort wiederholen" id="pw2">
                    </div>
                </div>
            </div>
            <input type="submit" value="Registrieren" disabled id="reg">
        </form>
    </div>
</div>
<script src="JS/register.js"></script>
</body>
</html>
