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

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="./">jQuery Candlestick</a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="">
                                    <a href="https://github.com/EdouardTack/candlestick/blob/master/README.md">Documentation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Candlestick jQuery plugin</h1>
                        <p>
                            This plugin create an ergonomic element to choose between 3 options. It's like a checkbox with one more option. You can configure <b>On</b> value, <b>Off</b> Value and <b>Default</b> Value.
                        </p>
                        <p>
                            It's a jQuery plugin and it uses CSS transition.
                        </p>
                        <p>
                            <a class="github-button" href="https://github.com/EdouardTack/candlestick" data-style="mega" aria-label="Fork EdouardTack/candlestick on GitHub">Fork my repo candlestick</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Compatibility</h2>
                    <ul>
                        <li>
                            Browsers
                            <ul>
                                <li>Chrome</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Basic usage</h2>
                    <input class="js-candlestick" type="checkbox" name="test" value="" id="test">
                    <input class="js-candlestick" type="checkbox" name="test2" value="1" id="test2">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <code>
                        $(".js-candlestick").candlestick();
                    </code>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Readonly element</h2>
                    <input class="js-candlestick" type="checkbox" name="truc[]" value="" readonly>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Disable element</h2>
                    <input class="js-candlestick" type="checkbox" name="truc[zr][]" value="" disabled>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <input class="with-after-setting" type="checkbox" name="machin" value="" id="machin">
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <code>
                            $('.with-after-setting').candlestick({
                                afterSetting: function(input, wrapper, value) {
                                    alert('The new value is :"' + value + '"');
                                }
                            });
                        </code>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Documentation</h2>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="lib/hammerjs/hammer.min.js"></script>
        <script type="text/javascript" src="lib/jquery-hammerjs/jquery.hammer.js"></script>
        <script type="text/javascript" src="dist/candlestick.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".js-candlestick").candlestick();
                $('.with-after-setting').candlestick({
                    afterSetting: function(input, wrapper, value) {
                        alert('The new value is :"' + value + '"');
                    }
                });
            });
        </script>
        <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
