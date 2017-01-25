var ClickCounter = (function(){
    "use strict";

    function clickEventHandler(e) {
        e.preventDefault();
        var dest = $(this).attr('href');
        if(e.which == 1 /* left button */ || e.which == 2 /* middle button */) {
            $.get('/projects/' + this.classList[0].slice(6) + '/click', function(){
                // Left click -> open in this window. Otherwise do not redirect, target will be opened in new tab
                if(e.which == 1)
                    window.location.href = dest;
            });
        }
    }

    function init() {
        $('[class^=count]').mousedown(clickEventHandler);
    }

    return {
        init: init
    };
})();