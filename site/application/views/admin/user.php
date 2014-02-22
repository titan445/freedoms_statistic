<style>

    p {margin: 0;}
</style>
<h2 align="center">Управление правами пользователя</h2>
<table align="center" cellspacing="5" cellpadding="10" border="1">
    <?php foreach ($users as $user) { ?>
        <tr>
            <td>
                <?= $user->username ?>
            </td>
            <td>
                <?php foreach ($user->roles->find_all() as $role) { ?>
                    <p>
                        <?= $role->name ?>&nbsp;
                        <a class="delete" role-id="<?= $role->id ?>" user-id="<?= $user->id ?>" href="javascript:void(0)">удалить</a>
                    </p>
                <?php } ?>
                <br>
                <select>
                    <?php foreach ($roles as $role) { ?>
                        <option value="<?= $role->id ?>"><?= $role->name ?></option>
                    <?php } ?>
                </select>
                <input user-id="<?= $user->id ?>" type="button" value="Добавить"/>
            </td>
        </tr>
    <?php } ?>
</table>

<script>
    function event_delete_roles(self) {
        $juery = $(self);
        var user_id = $juery.attr('user-id');
        var role_id = $juery.attr('role-id');
        $.post('/admin/delete', {
            user_id: user_id,
            role_id: role_id,
        }, function(res) {
            if (!res.error) {
                $juery.parent().remove();
            } else {
                alert('error: ' + res.error);
            }
        }, 'json');
    }


    $('input[type="button"]').click(function() {
        $juery = $(this);
        var user_id = $juery.attr('user-id');
        var role_id = $juery.parent().find('select :selected').val();
        
        $.post('/admin/add', {
            user_id: user_id,
            role_id: role_id
        }, function(res) {
            if (!res.error) {
                var role_name = $juery.parent().find('select :selected').text();
                var html = '<p> ' + role_name + ' &nbsp';
                html += ' <a class="delete" role-id="' + role_id + '" user-id="' + user_id + '" href="javascript:void(0)">удалить</a>';
                html += '</p>';
                var obj = $(html);
                $juery.parent().prepend(obj);
                obj.find('.delete').click(function() {
                    event_delete_roles(this);
                });

            } else {
                alert('error: ' + res.error);
            }
        }, 'json');
    });
    $('.delete').click(function() {
        event_delete_roles(this);
    });
</script>