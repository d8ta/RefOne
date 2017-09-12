function AccordionController() {

	return {
		parse: this.parse.bind(this),
	};

}

AccordionController.prototype = new Module();
AccordionController.prototype.constructor = AccordionController;

AccordionController.prototype.classes = {
};

AccordionController.prototype.selectors = {
	accordion: 'js-accordion'
};

AccordionController.prototype.elements = {
};

AccordionController.prototype.parse = function($context) {
	var $accordions = jQuery(this.getSelector('accordion'));
	if (!$accordions.length) {
		return false;
	}


	for (var i = $accordions.length - 1; i >= 0; i--) {
		new Accordion($accordions.eq(i));
	};

};
