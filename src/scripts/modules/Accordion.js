function Accordion($element) {

    this.$element = $element;
    this.$mainNav = jQuery('.site-header');

    this.init();

    return {};
}

Accordion.prototype = new Module;
Accordion.prototype.constructor = Accordion;

Accordion.prototype.init = function() {

    this.addListener();

};

Accordion.prototype.addListener = function() {

    this.$element.on('click', '.js-accordion__item', { _this: this }, this.clickHandler);

};

Accordion.prototype.clickHandler = function(event) {
    
	var _this = event.data._this;
    var $clicked = jQuery(this);

    if (!$clicked.hasClass('active')) {

        _this.$element.find('.js-accordion__item').removeClass('active');
        _this.$element.find('.js-accordion__item__text').slideUp();

        $clicked.addClass('active');

        $clicked.next().slideDown();

        setTimeout(function(){
            $clicked.velocity('scroll', {offset: _this.$mainNav.height() * -1, easing: 'easeInOutCubic', duration: 1200 });
        }, 400);

    } else {
        $clicked
        	.removeClass('active')
        		.next()
        			.slideUp();
    }
};
