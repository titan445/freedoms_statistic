
Pop_Up_Window = (function() {
    var windwos = [];

    function add_event(param_open) {
        $(param_open.buttom_opene).click(function(e) {
            close_all();
            e.preventDefault();
            $(param_open.div_open).show(200);
        });
    }
    ;

    function close_all() {
        for (var i in windwos) {
            $(windwos[i].div_open).fadeOut(200);
        }
    }

    return {
        /**
         * 
         * @param {string} id_jquery при нажатии на это будет открыт id_open_jquery example #lol
         * @param {string} id_open_jquery  div который будет показан exmaple $lol1
         * @returns {undefined}
         */
        add_window: function(id_jquery, id_open_jquery) {
            params = {
                buttom_opene: id_jquery,
                div_open: id_open_jquery
            }
            windwos.push(params);
            add_event(params);
        },
        show: function(id_open) {
            close_all();
            $(id_open).show(200);
        },
        hide: function() {
            close_all();
        }


    };

})();