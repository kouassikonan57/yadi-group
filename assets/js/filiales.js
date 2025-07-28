(function ($) {


     'use strict';
  
    var imJs = {
        m: function (e) {
            imJs.d();
            imJs.methods();
        },
        d: function (e) {
            this._window = $(window),
            this._document = $(document),
            this._body = $('body'),
            this._html = $('html')
        },
        methods: function (e) {
           
            imJs.timeLineStory();
          
        },
          timeLineStory: function () {
          (function() {

            'use strict';
          
            // define variables
            var items = document.querySelectorAll(".timeline li");
          
            // check if an element is in viewport
            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            function isElementInViewport(el) {
              var rect = el.getBoundingClientRect();
              return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
              );
            }
          
            function callbackFunc() {
              for (var i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                  items[i].classList.add("in-view");
                  console.log("IN VIEW", items[i]);
                }
              }
            }
          
            // listen for events
            window.addEventListener("load", callbackFunc);
            window.addEventListener("resize", callbackFunc);
            window.addEventListener("scroll", callbackFunc);
          
          })();
          
          
          
        }

    }
        imJs.m();
})(jQuery, window) 







  