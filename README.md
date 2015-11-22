# jQuery toggle candlestick

This is a switch jquery plugin. This plugin allows to choose between three options.
The toggle button switch with animation.
[Demonstration](http://www.tackacoder.fr/candlestick/)

```html
<link rel="stylesheet" href="dist/candlestick.min.css">
<script src="dist/candlestick.min.js" type="text/javascript"></script>
```

Create html field

```html
<input class="js-candlestick" type="checkbox" name="candlestick" value="1">
```

and then use it

```javascript
$('.js-candlestick').candlestick();
```

different options and methods

```javascript
$('.js-candlestick').candlestick({
    'on': '1', // for on value
    'off': '0', // for off value
    'nc': '', // for non value
    'swipe': true, // for swipe mobile
    afterAction: function(input, wrapper, action) {
        // Fired after action
    },
    afterRendering: function(input, wrapper) {
        // Fired after rendering element
    },
    afterOrganization: function(input, wrapper) {
        // Fired after organization method
    },
    afterSetting: function(input, wrapper, value) {
        // Fired after setting value
    }
});
```
input -> the input[type=hidden]
wrapper -> the wrapper element

## Dependencies
* [jQuery framework](https://jquery.com/)
* [Font awesome](http://fontawesome.io/)

## Compatibility
* Only use on Chrome browser
* jQuery version 1.9.1
* Develop with Twitter Bootstrap

## ToDo list
* Check compatibilities
* ~~swipe for mobile~~
