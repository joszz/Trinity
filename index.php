<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="copyright" content="Jos Nienhuis" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Trinity - The Matrix Generator</title>
    <link rel="stylesheet" type="text/css" href="css/the_blue_pill.css" />
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <meta name="theme-color" content="#000000">
</head>
<body>
    <div id="matrix">Trinity - The Matrix Generator</div>
    <div id="content" class="trinity_content_bg">
        <h1>Trinity - The Matrix Generator</h1>

        <form method="get" action="go.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="Neo" />

            <label for="smileys">Show smileys?</label>
            <input type="checkbox" name="smileys" id="smileys" checked />

            <label for="replay">Replay?</label>
            <input type="checkbox" name="replay" id="replay" checked />

            <label for="loop">Loop?</label>
            <input type="checkbox" name="loop" id="loop" checked />

            <label for="size">Font size:</label>
            <input type="text" name="size" id="size" value="14" />

            <input type="submit" value="Go!" />
        </form>
    </div>

    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
