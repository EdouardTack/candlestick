<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Selections</title>
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link href="dist/selections.min.css" rel="stylesheet"> -->
        <link href="dist/candlestick.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="./">jQuery Candlestick</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="https://github.com/EdouardTack/candlestick/blob/master/README.md">Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input type="checkbox" name="test" value="" id="test">
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input type="checkbox" name="truc[]" value="">
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input type="checkbox" name="truc[zr][]" value="0">
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input type="checkbox" name="machin" value="1" id="machin">
                </div>
            </div>
            <hr>
        </div>

        <script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/jquery-touchswipe/jquery.touchSwipe.js"></script>
        <!-- <script type="text/javascript" src="dist/selections.min.js"></script> -->
        <script type="text/javascript" src="dist/candlestick.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $("input[type='checkbox']").candlestick();
            });
        </script>
    </body>
</html>
