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
    <?php if(isset($_GET['size'])) : ?>
    <?php echo '<style type="text/css">div#content{font-size:' . $_GET['size'] . 'px}</style>' ?>
    <?php endif ?>

    <div id="content">
        <span id="blinker">_</span>
        <p></p>
    </div>
    <div id="replay">
        <a href="#"></a>
    </div>

    <script type="text/javascript">
        var name = '<?php echo $_GET['name'] ?>';
        var smileys = <?php echo $_GET['smileys'] == 'on' ? 'true' : 'false' ?>;
        var loop = <?php echo $_GET['loop'] == 'on' ? 'true' : 'false' ?>;
        var doReplay = <?php echo $_GET['replay'] == 'on' ? 'true' : 'false' ?>;
    </script>
    <script type="text/javascript" src="js/go.js"></script>
</body>
</html>
