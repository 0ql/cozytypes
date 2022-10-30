<?php
session_start();
$wpm = $_SESSION['wpm'];
$accuracy = $_SESSION['accuracy'];
$testTime = $_SESSION['testTime'];
if (isset($_SESSION["user_id"])) {
    //neccessary to setup
    $mysqli = require __DIR__ . "/config.php";
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
    
    $result = $mysqli->query($sql);
   
    $user = $result->fetch_assoc();
    $wpmPR = htmlspecialchars($user["wpm"]);
    $id = ($user["id"]);
    //if the wpm is higher update
    if ($wpm > $wpmPR)
    {
        $sql = "UPDATE user SET wpm='$wpm' WHERE id=$id";
        if ($mysqli->query($sql) === TRUE) {
          } else {
          }
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=TAG_ID"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());
          gtag('config', 'G-9W2ZHHJ7P5');
        </script>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JMV592"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <link rel="shortcut icon" type="image/x-icon" href="images\keyboard.ico" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cozytypes</title>
        <link rel="stylesheet" href="style.php">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="mainContent">
    <nav>
            <li>CozyTypes</li>
            <li><a id = "play" href="index.php">play</a></li>
            <li><a href="login.php">profile</a></li>
            <li><a href="preferences.php">preferences</a></li>
            <li><a href="learn.php">learn</a></li>
    </nav>
        <div id="displayStats">
            <div class = "statsRow" ><?= $wpm ?> wpm</div>
            <div class = "statsRow" ><?= $accuracy ?>% accuracy</div>
            <div class = "statsRow" ><?= $testTime ?> s</div>
        </div>
        </div>
    </body>
</html>
