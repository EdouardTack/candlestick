"use strict";
(function($) {

    /**
     *
     * @property {string}
     * @property {string}
     * @property {string}
     * @property {bool}
     * @property {function}
     * @property {function}
     * @property {function}
     * @property {function}
     */
    $.fn.candlestick = function(options) {
        if (options == 'val') {
            if ($(this).find('input[type="hidden"]')) {
                return $(this).find('input[type="hidden"]').val();
            }
            else {
                return $(this).val();
            }
        }

        if (options == 'reset') {
            var candlestick = new Candlestick($(this));
            candlestick.parent = $('[data-candlestick-id="' + $(this).attr('id') + '"]');
            candlestick.handle = candlestick.parent.find('.candlestick-toggle');
            candlestick.element = $('#' + $(this).element.attr('id'));
            candlestick.defaultOrganization();
            candlestick.setValue(0);
            return;
        }

        var defaults = {
            'on': '1',
            'off': '0',
            'default': '',
            'swipe': true,
            afterAction: function() {},
            afterRendering: function() {},
            afterOrganization: function() {},
            afterSetting: function() {}
        };

        var settings = $.extend(defaults, options);

        return this.each(function() {
            // Check the element is checkbox type
            // CODE
            var candlestick = new Candlestick($(this), settings);
            candlestick.initialize();
        });
    }

})(jQuery);

/**
 * Instance of Candlestick object
 *
 * @param jQuery element
 * @param Settings
 * @return void
 */
var Candlestick = function (element, settings) {
    this.element = element;
    this.settings = settings;
    this.default = {};
}

/**
 * Initializing the awesome
 * @return void
 */
Candlestick.prototype.initialize = function () {
    this.default.id = this.element.attr('id');
    this.default.value = this.element.val();
    this.default.name = this.element.attr('name');
    this.default.data = this.element.data();

    // Create the HTML code
    this.wrapElement();

    // Delete Input element
    this.delete();

    // Do afterRendering callback
    if (this.settings.afterRendering())
        this.settings.afterRendering(this.element, this.parent);

    // Organize elements inside the plugin
    this.defaultOrganization();

    // Do afterOrganization callback
    if (this.settings.afterOrganization())
        this.settings.afterOrganization(this.element, this.parent);

    // set the value
    this.assignValue();

    // initialize possible actions
    this.actions();
}

/**
 * Create the new element
 * Do the html architecture
 *
 * @return void
 */
Candlestick.prototype.wrapElement = function () {
    var $id = '';
    if (this.default.id)
        $id = this.default.id;
    else
        $id = this.default.name.replace(/[\[\]]/gi, "");

    this.default.id = $id;

    var datas = '';
    if (this.default.data) {
        var $data = this.default.data;
        for (d in $data) {
            datas += ' data-' + d + '="' + $data[d] + '"';
        }
    }

    var $disabled = '';
    var $inputDisabled = '';
    if (this.element.attr('disabled')) {
        $disabled = ' candlestick-disabled';
        $inputDisabled = ' disabled';
    }

    this.element.wrap('<div class="candlestick-wrapper"><div data-candlestick-id="' + $id + '" class="candlestick-bg' + $disabled + '"><div class="candlestick-toggle"></div><div class="candlestick-off"><i class="fa fa-times"></i></div><div class="candlestick-nc">&nbsp;</div><div class="candlestick-on"><i class="fa fa-check"></i></div><input type="hidden" value="' + this.default.value + '" name="' + this.default.name + '" id="' + $id + '"' + datas + $inputDisabled + '></div></div>');
}

/**
 * Set the value compare with settings values
 *
 * @return void
 */
Candlestick.prototype.assignValue = function () {
    var value = this.default.value;

    if (
        (
            (typeof value) == (typeof this.settings.on) &&
            value == this.settings.on
        ) ||
        (
            (typeof value) == (typeof this.settings.off) &&
            value == this.settings.off
        )
    )
    {
        this.setPositionByValue(value);
    }
}

/**
 * Set the value compared the cursor moving
 *
 * @param identity of cursor moving
 * @return void
 */
Candlestick.prototype.setValue = function (cursor) {
    var value = '';
    if (cursor == 0) {
        value = this.settings.default;
    }
    else if (cursor > 0) {
        value = this.settings.on;
    }
    else if (cursor < 0) {
        value = this.settings.off;
    }

    this.element.val(value);

    // Do afterSetting callback
    if (this.settings.afterSetting)
        this.settings.afterSetting(this.element, this.parent, value);
}

/**
 * Move the toggle compared the value
 *
 * @param identity of cursor moving
 * @return void
 */
Candlestick.prototype.setHandle = function (cursor) {
    if (cursor == 0) {
        this.defaultOrganization();
        // Do afterAction callback
        if (this.settings.afterAction())
            this.settings.afterAction(this.element, this.parent, 'default');

        this.setValue(cursor);
        return;
    }
    else if (cursor > 0) {
        var left = this.parent.outerWidth() - this.parent.find('.candlestick-on').outerWidth();
        var action = 'on';
    }
    else if (cursor < 0) {
        var left = 0;
        var action = 'off';
    }

    // Do afterAction callback
    if (this.settings.afterAction())
        this.settings.afterAction(this.element, this.parent, action);

    this.handle.css('left', left);
    this.setValue(cursor);
}

/**
 * Move the toggle in initialization with the value setting
 *
 * @param value
 * @return void
 */
Candlestick.prototype.setPositionByValue = function(value) {
    if (value == this.settings.on) {
        this.setBackground('on');
        this.setHandle(1);
    }
    else if (value == this.settings.off) {
        this.setBackground('off');
        this.setHandle(-1);
    }
}

/**
 * Set the class for the background element
 *
 * @param class name
 * @return void
 */
Candlestick.prototype.setBackground = function (className) {
    this.parent.removeClass('on').removeClass('off');
    this.parent.addClass(className);
}

/**
 * Organization when no value set
 *
 * @return void
 */
Candlestick.prototype.defaultOrganization = function () {
    var candlestickBgHeight = this.parent.outerHeight();
    var candlestickBgWidth = this.parent.outerWidth();
    var candlestickFalseWidth = this.handle.outerWidth();
    var candlestickToggleWidth = this.handle.outerWidth();
    var candlestickToggleHeight = this.handle.outerHeight();

    this.parent.removeClass('on').removeClass('off');
    this.handle.css({
        top: (candlestickBgHeight - (candlestickToggleHeight)) / 2,
        left: (candlestickBgWidth / 2) - (candlestickToggleWidth / 2),
    });
}

/**
 * List of possible actions
 *
 * @return void
 */
Candlestick.prototype.actions = function () {
    this.actionOn();
    this.actionOff();
    this.actionDefault();

    if (this.settings.swipe)
        this.actionSwipe();
}

/**
 * On action
 *
 * @return void
 */
Candlestick.prototype.actionOn = function () {
    var that = this;
    this.parent.find('.candlestick-on').on('click', function(e) {
        e.preventDefault();
        that.putOn();
    });
}

/**
 * Do the On animations
 *
 * @return void
 */
Candlestick.prototype.putOn = function () {
    if (!this.element.hasClass('candlestick-disabled')) {
        this.setBackground('on');
        this.setHandle(1);
    }
}

/**
 * Off action
 *
 * @return void
 */
Candlestick.prototype.actionOff = function (candlestick) {
    var that = this;
    this.parent.find('.candlestick-off').on('click', function(e) {
        e.preventDefault();
        that.putOff();
    });
}

/**
 * Do the Off animations
 *
 * @return void
 */
Candlestick.prototype.putOff = function () {
    if (!this.element.hasClass('candlestick-disabled')) {
        this.setBackground('off');
        this.setHandle(-1);
    }
}

/**
 * Default action
 *
 * @return void
 */
Candlestick.prototype.actionDefault = function (candlestick) {
    var that = this;
    this.parent.find('.candlestick-nc').on('click', function(e) {
        e.preventDefault();
        if (!that.element.hasClass('candlestick-disabled')) {
            that.setBackground('');
            that.setHandle(0);
        }
    });
}

/**
 * Swipe action
 *
 * @return void
 */
Candlestick.prototype.actionSwipe = function () {
    var that = this;
    if (this.settings.swipe && typeof $.fn.swipe != 'undefined') {
        this.parent.find('.candlestick-toggle').swipe({
            swipeLeft: function(event, direction, distance, duration, fingerCount) {
                that.putOff();
            },
            swipeRight: function(event, direction, distance, duration, fingerCount) {
                that.putOn();
            }
        });
    }
}

/**
 * Delete the default element and instance new jquery elements
 *
 * @return void
 */
Candlestick.prototype.delete = function () {
    this.element.remove();
    this.parent = $('[data-candlestick-id="' + this.default.id + '"]');
    this.handle = this.parent.find('.candlestick-toggle');
    this.element = $('#' + this.default.id);
}
