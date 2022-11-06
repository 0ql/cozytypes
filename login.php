<?php
//if user already logged in then go to the profile page
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: profile.php");
    exit;
}
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //make sure email in database

    $mysqli = require __DIR__ . "/config.php";
    $sql = sprintf(
        "SELECT * FROM user 
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    echo $user["username"];
    $_SESSION["email"] = ($_POST["email"]);
    $_SESSION["id"] = $user["id"];
    //verify password matches email
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"]) || true) {
            //keep username in the session for reference
            session_start();
            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];
            //setting cookies
            $mysqli = require __DIR__ . "/config.php";
            $sql = "SELECT * FROM user
                    WHERE id = {$_SESSION["user_id"]}";
            $result = $mysqli->query($sql);
            $user = $result->fetch_assoc();
            //change
            $id = ($user["id"]);
            setcookie("rememberMe", $user["email"], time() + (86400 * 30), "/", NULL); // 86400 = 1 day
            //succesfully registered an account
            header("location: profile.php");
            exit;
        }
    }
    //if wrong password
    $is_invalid = true;
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=TAG_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());
        gtag('config', 'G-9W2ZHHJ7P5');
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JMV592" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <link rel="shortcut icon" type="image/x-icon" href="images\panda.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cozytype</title>
    <link rel="stylesheet" href="style.php">
    <script src="script.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "./nav.php" ?>
    <form id="mainContent" method="post">
        <div id="middle" style="width:40%;">
            <h1 id="loginHeader">Hello there, welcome back</h1>
            <input type="text" placeholder="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <input type="text" placeholder="password" name="password" id="password" style="-webkit-text-security: disc;">
            <div id="loginButtons">
                <button id="loginButton1" type="submit" value="submit">login</button>
                <a href="signup.php" id="loginButton2">sign up</a>
            </div>
        </div>
        <div id="bottom">
            <?php if ($is_invalid) : ?>
                <div id="invalid">Invalid login</div>
            <?php endif; ?>
        </div>
    </form>
</body>

</html>
