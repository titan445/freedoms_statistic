Selected_User = (function() {

    var users = [];
    var idShowUser;

    function template(username) {
        var html = '<p><span>' + username + '</span> &nbsp; <a href="">Удалить</a></p>';
        var $new_elemnt = $(html);
        $new_elemnt.find('a').click(function(e) {
            e.preventDefault();
            var self = $(this).parent();
            var indexDelete = users.indexOf(username);
            if (indexDelete != -1) {
                users.splice(indexDelete, 1);
                self.remove();
            }
        });
        return $new_elemnt;
    }

    return {
        set_div: function(id) {
            idShowUser = id;
        },
        add_user: function(username) {
            users.push(username);
            $(idShowUser).prepend(template(username));
        },
        /**
         * Получение списка юзеров
         * @returns {string}
         */
        getUser: function() {
            return users.join(', ');
        }
    };
})();