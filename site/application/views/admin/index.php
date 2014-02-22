        <style>


            #comands {
                padding: 10px;
                border: 1px solid #000;
                width: 240px;
                display: none;
            }
            #comands p {
                padding: 5px;
                margin-bottom: -5px;
            }
            #comands p:hover{
                padding: 5px;
                background-color: #F8F8F8;
            }
        </style>

        <h2 id="comands-list" style="cursor: pointer">Список команд</h2>
        <div id="comands">

            <?php foreach ($comands as $comand) { ?>
                <p><?= $comand->name ?> &nbsp; <a href="#" id-comands="<?= $comand->id ?>" class="delete">Удалить</a></p>
            <?php } ?>

            <br>
            <p>Новое название команды:</p>
            <p>
                Название: <input id="new-name-comands" type="text"> 
                <input id="add-new-comand" type="button" value="Добавить">
            </p>
        </div>

        <script>
            $('#add-new-comand').click(function(e) {
                var new_name = $('#new-name-comands').val();
                $.post('admin/comands/add', {
                    'name': new_name,
                }, function(res) {
                    if (res.error) {
                        alert('Ошибка ' + res.error);
                    } else {
                        $('#add-new-comand').parent().append('Добавленно ');
                    }
                }, 'json');
            });

            $('.delete').click(function(e) {
                e.preventDefault();
                $aLink = $(this);
                $this = $aLink.parent();
                console.log('g', $this.html())

                $.get('admin/comands/delete/' + $aLink.attr('id-comands'), function(res) {
                    console.log('result=', res)
                    if (res.error) {
                        alert('ошибка удаления');
                    } else {
                        $this.remove();
                    }
                }, 'json');
            });
            $('#comands-list').click(function(e) {
                $comands = $('#comands');
                if ($comands.css('display') == 'none') {
                    $comands.show();
                } else {
                    $comands.hide();
                }
            });
        </script>
