<body class="center">
    <canvas id="q" width="1024" height="768">Sorry Browser Won't Support</canvas>

    <div class="wrapper">
        <div id="content">
            <div id="transparent-overlay"></div>

            <form method="get" class="container">
                <h1>Trinity - The Matrix Generator</h1>
                <div class="form-group row">
                    <label for="name" class="col-lg-5 text-right">Name</label>
                    <div class="col-lg-3">
                        <input type="text" name="name" id="name" value="Neo" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>

                <div class="form-group row">

                    <input type="checkbox" name="smileys" id="smileys" checked />
                    <label for="smileys" class="btn btn-default btn-sm smileys">:)</label>
                </div>

                <div class="form-group row">
                    <div class="col-lg-8 text-right">
                        <button type="submit" class="btn btn-success">Go!</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>

    <footer class="navbar navbar-inverse">
        <div class="container text-muted">
                <a href="#" target="_blank" class="copyright">Copyright &copy; <?php echo '2016 - ' . (date('Y') != 2016 ? date('Y') : null) ?>
                    Jos Nienhuis
                </a>
        </div>
    </footer>

    <script src="js/jquery.vibrate.js" type="text/javascript"></script>
    <script src="js/waves.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
