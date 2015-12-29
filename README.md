# jQuery toggle candlestick

This is a switch jquery plugin. This plugin allows to choose between three options.
The toggle button switch with animation.
You can use it with swipe option (Perform by Hammerjs)
[Demonstration](http://www.tackacoder.fr/candlestick/)

```html
<link rel="stylesheet" href="path/to/font-awesome.min.css">
<link rel="stylesheet" href="dist/candlestick.min.css">
<script src="dist/candlestick.min.js" type="text/javascript"></script>
```

Load dependencies for swipe option

```html
<script src="path/to/hammerjs/hammer.min.js" type="text/javascript"></script>
<script src="path/to/jquery-hammerjs/jquery-hammer.js" type="text/javascript"></script>
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
    'swipe': true, // for swipe
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
wrapper -> the wrapper element (.candlestick-bg)


**More options for swipe**

```javascript
$('.js-candlestick').candlestick({
    'swipe': {
        enabled: true, // for swipe
        mobile: true, // Only for mobile/tablet (to develop)
        desktop: true, // Only for desktop (to develop)
        transition: false
    }
});
```

## Dependencies
* [jQuery framework](https://jquery.com/)
* [Bootstrap](http://getbootstrap.com/)
* [Font awesome](http://fontawesome.io/)
* [Hammerjs](http://hammerjs.github.io/)

## Compatibility
* Only use on Chrome browser
* Minimum jQuery version 1.9.1
* Develop with Twitter Bootstrap 3.3

## ToDo list
* Check compatibilities
* ~~Check if the element is a checkbox type~~
* ~~Swipe~~
* Option for swipe in desktop and/or mobile
* Swipe transistion
    * ~~On/Off~~
    * ~~On/Default/Off~~

# Developpement

## Update workflow

```
npm update
bower update
```

# LICENCE

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
