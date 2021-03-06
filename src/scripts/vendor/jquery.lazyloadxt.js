/*! Lazy Load XT v1.0.5 2014-06-05
 * http://ressio.github.io/lazy-load-xt
 * (C) 2014 RESS.io
 * Licensed under MIT */

(function($) {
    var options = $.lazyLoadXT,
        bgAttr = options.bgAttr || 'data-bg';

    options.selector += ',[' + bgAttr + ']';

    $(document).on('lazyshow', function(e) {

        var $this = $(e.target);

        if ($this.attr(bgAttr)) {
            $this
                .css('background-image', "url('" + $this.attr(bgAttr) + "')")
                .removeAttr(bgAttr);
        }

        $this
            .addClass('lazy-loaded');


    });

})(window.jQuery || window.Zepto || window.$);
