<?php
    session_start();
    include "./classes/post.php";
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatRoom</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./icon/icon.svg">
    <script src="JS/handlePost.js" type="module"></script>
</head>
<body>
<?php
    if(empty($_SESSION["UID"])){
        $_SESSION["UID"] = 2;
    }
?>
<div class="contentLimiter">
    <div id="posts">

    </div>
    <div>
        <form method="post" action="/api.php">
            <textarea name="content">
            </textarea>
            <?php echo("<input type='hidden' name='user' value='".$_SESSION["UID"]."' />")?>
            <button>Post</button>
        </form>
    </div>
</div>
</body>
</html>