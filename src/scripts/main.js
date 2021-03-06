(function(jQuery) {



    /* ======== Extern ======== */
    //= include ../bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js
    //= include ../bower_components/owl.carousel/dist/owl.carousel.min.js
    //= include ../bower_components/velocity/velocity.min.js
    //= include ../bower_components/js-cookie/src/js.cookie.js

    //= include vendor/jquery.lazyloadxt.js

    /* ======== Common includes ======== */
    //= include common/AjaxForm.js
    //= include common/Application.js
    //= include common/Module.js
    //= include common/Functions.js

    /* ======== Module includes ======== */
    //= include modules/Accordion.js
    //= include modules/AccordionController.js
    //= include modules/OwlcarouselController.js
    //= include modules/Owlcarousel.js
    //= include modules/AjaxFormController.js
    //= include modules/LanguageSwitch.js
    //= include modules/Page.js
    //= include modules/NestedNavigation.js
    //= include modules/FastclickController.js
    //= include modules/Sidebar.js
    //= include modules/SiteController.js
    //= include modules/ParsleyController.js
    //= include modules/Scroll.js
    //= include modules/ScrollController.js


    /* ======== Application Setup ======== */
    var application = new Application();
    application
        .addModule(new AccordionController(), 'accordionController')
        .addModule(new OwlcarouselController(), 'owlcarouselcontroller')
        .addModule(new AjaxFormController(), 'ajaxFormController')
        .addModule(new LanguageSwitch(), 'LanguageSwitch')
        .addModule(new Page(), 'Page')
        .addModule(new NestedNavigation(), 'nestedNavigation')
        .addModule(new Sidebar(), 'sidebar')
        .addModule(new FastclickController(), 'fastclickController')
        .addModule(new SiteController(), 'siteController')
        .addModule(new ParsleyController(), 'parsleyController')
        .addModule(new Scroll(), 'scroll')
        .addModule(new ScrollController(), 'scrollcontroller')
        .run();


})(jQuery);
