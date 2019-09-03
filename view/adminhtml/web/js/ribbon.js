define([
        'uiComponent',
        'jquery',
        'ko'
    ],
    function (Component, $, ko) {
        return Component.extend({

            /** @inheritdoc */
            initialize: function (config, element) {
                this._super();
                $(document).on('scroll', function (){
                    if (window.pageYOffset > $(element).outerHeight()) {
                        $(element).addClass("_fixed");
                    } else {
                        $(element).removeClass("_fixed");
                    }
                });
            }
        });
    });
