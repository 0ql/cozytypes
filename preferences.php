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
        <script type = "text/javascript" src="script.js"></script>  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    </head>
    <body>
    <nav>
            <li>CozyTypes</li>
            <li><a id = "play" href="index.php">play</a></li>
            <li><a href="login.php">profile</a></li>
            <li><a href="preferences.php">preferences</a></li>
    </nav>
        <form id="preferencesArea" method="POST" action="preferences.php">
          <div class = "horizontalAlign">
            <div class ="rowContainer" style="width: 40%">
              <h1 class = "notSignedIn" id="preferenceHeader">size</h1>
              <a class = "preferencesRow" onclick="setCookie('fontSize', 1, 30)">1</a>
              <a class = "preferencesRow" onclick="setCookie('fontSize', 2, 30)">2</a>
              <a class = "preferencesRow" onclick="setCookie('fontSize', 3, 30)">3</a>
              <a class = "preferencesRow" onclick="setCookie('fontSize', 4, 30)">4</a>
              <a class = "preferencesRow" onclick="setCookie('fontSize', 5, 30)">5</a>
            </div>
            <div class ="rowContainer" style="width: 60%">
              <h1 class = "notSignedIn" id="preferenceHeader">font</h1>
                <a class = "preferencesRow" onclick="setCookie('fontFamily', 'arial', 30)">arial</a>
                <a class = "preferencesRow" onclick="setCookie('fontFamily', 'helvetica', 30)">helvetica</a>
                <a class = "preferencesRow" onclick="setCookie('fontFamily', 'futura', 30)">futura</a>
                <a class = "preferencesRow" onclick="setCookie('fontFamily', 'lexendDeca', 30)">lexendDeca</a>
                <a class = "preferencesRow" onclick="setCookie('fontFamily', 'verdana', 30)">verdana</a>
            </div>
          </div>
          <div class = "horizontalAlign">
            <div class ="rowContainer" style="width: 40%">
              <h1 class = "notSignedIn" id="preferenceHeader">caret</h1>
              <a class = "preferencesRow" onclick="setCookie('caret', 'none', 30)">none</a>
              <a class = "preferencesRow" onclick="setCookie('caret', 'underline', 30)">underline</a>
              <a class = "preferencesRow" onclick="setCookie('caret', 'highlight', 30)">highlight</a>
            </div>
            <div class ="rowContainer" style="width: 35%">
              <h1 class = "notSignedIn" id="preferenceHeader"># of lines</h1>
                <a class = "preferencesRow" onclick="setCookie('lineCount', 1, 30)">1</a>
                <a class = "preferencesRow" onclick="setCookie('lineCount', 2, 30)">2</a>
                <a class = "preferencesRow" onclick="setCookie('lineCount', 3, 30)">3</a>
                <a class = "preferencesRow" onclick="setCookie('lineCount', 4, 30)">4</a>
            </div>
            <div class ="rowContainer" style="width: 25%">
              <h1 class = "notSignedIn" id="preferenceHeader">blur text</h1>
                <a class = "preferencesRow" onclick="setCookie('blur', 'on', 30)">on</a> 
                <a class = "preferencesRow" onclick="setCookie('blur', 'off', 30)">off</a>
            </div>
          </div>
            <div id = "themesContainer" class ="rowContainer">
            <h1 id="preferenceHeader">theme</h1>
                <a class = "themesRow" id = "theme-olivia" onclick="setCookie('theme', 'olivia', 30)">olivia</a>
                <a class = "themesRow" id = "theme-dracula" onclick="setCookie('theme', 'dracula', 30)">dracula</a>
                <a class = "themesRow" id = "theme-8008" onclick="setCookie('theme', '8008', 30)">8008</a>
                <a class = "themesRow" id = "theme-mizu" onclick="setCookie('theme', 'mizu', 30)">mizu</a>
                <a class = "themesRow" id = "theme-striker" onclick="setCookie('theme', 'striker', 30)">striker</a>
                <a class = "themesRow" id = "theme-blueberry" onclick="setCookie('theme', 'blueberry', 30)">blueberry</a>
                <a class = "themesRow" id = "theme-creamsicle" onclick="setCookie('theme', 'creamsicle', 30)">creamsicle</a>
                <a class = "themesRow" id = "theme-botanical" onclick="setCookie('theme', 'botanical', 30)">botanical</a>
                <a class = "themesRow" id = "theme-luna" onclick="setCookie('theme', 'luna', 30)">luna</a>
            </div>
        </form>
    </body>
</html>
 
