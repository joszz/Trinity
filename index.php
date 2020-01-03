<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="copyright" content="Jos Nienhuis" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Trinity - The Matrix Generator</title>
    
    <?php if(!isset($_GET['name'])) : ?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/waves.css" />
    <?php endif ?>

    <link rel="stylesheet" type="text/css" href="css/the_blue_pill.css" />
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <meta name="theme-color" content="#000000">
</head>

<?php include(isset($_GET['name']) ? 'go.php' : 'form.php'); ?>

</html>
