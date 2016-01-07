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
                    <input class="js-candlestick" type="checkbox" name="test" value="" id="test">
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="truc[]" value="" readonly>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="truc[zr][]" value="" disabled>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="js-candlestick" type="checkbox" name="machin" value="1" id="machin">
                </div>
            </div>
        </div>
        <hr>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/hammerjs/hammer.min.js"></script>
        <script type="text/javascript" src="lib/jquery-hammerjs/jquery.hammer.js"></script>
        <script type="text/javascript" src="lib/js/candlestick.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".js-candlestick").candlestick({
                    size: 'lg',
                    swipe: {
                        enabled: true,
                        transition: true
                    }
                });
            });
        </script>
    </body>
</html>
