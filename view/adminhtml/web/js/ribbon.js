define([
        'uiComponent',
        'jquery',
        'ko'
    ],
    function (Component, $, ko) {
        return Component.extend({

            /** @inheritdoc */
            initialize: function (config) {
                this._super();
                let ribbon = document.getElementById("easygento_ribbon");
                $(document).on('scroll', function (){
                    if (window.pageYOffset > ribbon.offsetHeight) {
                        ribbon.classList.add("_fixed");
                    } else {
                        ribbon.classList.remove("_fixed");
                    }
                });
            }
        });
    });
