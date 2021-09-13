<body class="center">
    <canvas id="q">Sorry Browser Won't Support</canvas>

    <div class="wrapper">
        <div id="content">
            <div id="transparent-overlay"></div>

            <form method="get" class="container">
                <h1 class="hidden-xs">Trinity - The Matrix Generator</h1>
                <h1 class="visible-xs">Trinity<br />
                    The Matrix Generator</h1>
                <div class="form-group row">
                    <label for="name" class="col-lg-5 col-xs-2 text-right">Name</label>
                    <div class="col-lg-3 col-xs-8">
                        <input type="text" name="name" id="name" value="Neo" class="form-control" />
                    </div>
                    <div class="col-lg-4 col-xs-2">
                        <input type="checkbox" name="smileys" id="smileys" checked />
                        <label for="smileys" class="smileys" title="Show smileys?">:]</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-8 text-right">
                        <div class="btn-group">
                            
                            <button class="btn btn-default copy">Copy link</button>
                            <textarea class="offcanvas"></textarea>
                            <button type="submit" class="btn btn-success">Go!</button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>

    <footer class="navbar">
        <div class="container">
            <a href="https://github.com/joszz/Trinity" target="_blank" class="copyright text-muted">
                &copy; <?php echo date('Y') ?>
                Jos Nienhuis
            </a>
        </div>
    </footer>

    <script src="js/jquery.vibrate.js" type="text/javascript"></script>
    <script src="js/waves.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
