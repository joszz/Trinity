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
                </div>

                <div class="form-group row">
                    <label for="smileys" class="col-lg-5 text-right">Show smileys</label>
                    <div class="col-lg-3">
                        <input type="checkbox" name="smileys" id="smileys" checked />
                    </div>
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

    <script src="js/jquery.vibrate.js" type="text/javascript"></script>
    <script src="js/waves.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
