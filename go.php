<body>
    <div id="content">
        <span id="blinker">_</span>
        <p></p>
    </div>
    <div id="replay">
        <a href="#"></a>
    </div>

    <script type="text/javascript">
        var name = '<?php echo $_GET['name'] ?>';
        var smileys = <?php echo isset($_GET['smileys']) && $_GET['smileys'] == 'on' ? 'true' : 'false' ?>;
    </script>
    <script type="text/javascript" src="js/go.js"></script>
</body>
