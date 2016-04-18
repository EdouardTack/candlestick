<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Candlestick</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
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

        <script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/hammerjs/hammer.min.js"></script>
        <script type="text/javascript" src="lib/jquery-hammerjs/jquery.hammer.js"></script>
        <!-- <script type="text/javascript" src="dist/candlestick.min.js"></script> -->
        <script type="text/javascript" src="lib/js/candlestick.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".js-candlestick").candlestick({
                    'mode': 'contents',
                    'contents': {
                        'left': 'Acheter',
                        'middle': 'Louer',
                        'right': 'Estimer',
                    },
                    debug: 1
                });
            });
        </script>
    </body>
</html>
