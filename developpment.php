<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Candlestick</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/css/candlestick.css" rel="stylesheet">
    </head>
    <body>

        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="test" value="off" id="test">
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="truc[]" value="on" id="truc" readonly>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="truc[zr][]" value="off" id="truc2" disabled>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="machin" value="on" id="machin">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a href="#" id="candle-reset" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
        <hr>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prototype/1.7.3/prototype.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/hammerjs/hammer.min.js"></script>
        <script type="text/javascript" src="lib/jquery-hammerjs/jquery.hammer.js"></script>
        <script type="text/javascript" src="lib/js/candlestick.js"></script>
        <script type="text/javascript">
            jQuery.noConflict();
            jQuery(document).ready(function($) {
                $(".js-candlestick").candlestick();
            });

            /*jQuery(function($) {
                $(".js-candlestick").candlestick({
                    swipe: {
                        enabled: true,
                        transition: true
                    },
                    on: 'on',
                    off: 'off',
                    nc: 'default',
                    allowManualNc: false
                });

                $('#candle-reset').on('click', function(e) {
                    e.preventDefault();

                    $(".js-candlestick").candlestick('reset');
                    // $("#machin").candlestick('reset');
                });
            });*/
        </script>
    </body>
</html>
