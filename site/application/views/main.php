<!DOCTYPE html>
<html>
    <head>
        <title>Fredooms statistics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/css/style.css" media="all" />
        <script src="http://yandex.st/jquery/2.1.0/jquery.min.js"></script>
        <script src="/js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="/js/jquery-ui-sliderAccess.js"></script>
        <link href="/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" media="all">
        <script src="/js/jquery-ui-timepicker-addon.min.js"></script>
        <link href="/css/jquery-ui-timepicker-addon.min.css" rel="stylesheet" media="all">
        <script src="/js/pop_up_window.js"></script>
        <script src="/js/add_user.js"></script>

    </head>

    <body>

        <div id="auth">
            <?php if (Auth::instance()->logged_in()) { ?>
                <?= Auth::instance()->get_user()->username ?>&nbsp;&nbsp;<a href="/user/logout">Выйти</a>
            <?php } else { ?>
                <a class="enter" href="">Вход</a> &nbsp;&nbsp; <a class="ristr" href="">Регистрация</a>
            <?php } ?>


            <?= (isset($error) ? "<br><br>$error" : '') ?>

        </div>

        <div id="quene-ant" style=" ">
            <a href="" class="img-qauene-ant">
                <img src="/img/ant-quene.png" width="106" height="106" />
            </a>
            <p><span>•</span>  Королева муравьев</p>
        </div>

        <div id="kaynake" style=" ">
            <a href="/kaynake" class="img-qauene-ant">
                <img src="/img/kaynake.png" width="106" height="106" />
            </a>
            <p><span>•</span>  Кайнак</p>
        </div>


        <div id="lilit" style=" ">
            <a href="" class="img-qauene-ant">
                <img src="/img/lilit.png" width="106" height="106" />
            </a>
            <p><span>•</span>  Лилит</p>
        </div>


        <div id="orfen" style=" ">
            <a href="" class="img-qauene-ant">
                <img src="/img/orfen.png" width="106" height="106" />
            </a>
            <p><span>•</span>  Орфен</p>
        </div>


        <div id="anakim" style=" ">
            <a href="" class="img-qauene-ant">
                <img src="/img/anakim.png" width="106" height="106" />
            </a>
            <p>Анаким <span>•</span></p>
        </div>

        <div id="baum" style=" ">
            <a href="" class="img-qauene-ant">
                <img src="/img/baum.png" width="106" height="106" />
            </a>
            <p>Баюм <span>•</span></p>
        </div>
        <div id="freedom">
            Freedoms
        </div>

        <!-------------------------------------  hide windows ---------------->
        <style>
            .header-table {
                font-weight: bold;
                font-size: 19px;

            }
            .header-table td {
                border-bottom: 1px solid #000;
                padding: 10px;
            }

            .body-table {
                padding: 10px;
                text-align: center;
                border: 1px solid #000;
            }

            .body-table td{

                border-bottom: 1px solid #000;
            }

            .body-table:hover td{
                background-color: #FFD324;
            }
            .table-kaynake {
                font-size: 18px;
            }

            .table-date {
                border: 1px solid #000;
            }
            #comands_t{
                margin-left: 20px;
                margin-top: 20px;
            }
            #comands_t p{
                color: #000;
                font-size: 14px;
                font-family: Tahoma;
                font-weight: normal;
                margin-top: -15px;
            }

        </style>
        <div id="kaynak-info">
            <div class="close">X</div><br><br>
            <?php if (Auth::instance()->logged_in('party_Leader')) { ?>
                <div style="margin-left:10px;">
                    <a id="add-new-data-show" href="">Добавить данные</a>
                    <a id="edit-squad" href="">Управление командой</a>
                </div>

                <div class="user-editin-kaynake" id="edit-squad-form">

                    <div id="comands_t" >
                        <?php
                        if (isset($players))
                            foreach ($players as $comand) {
                                ?>
                                <p><?= $comand->name ?> &nbsp; <a href="#" id-comands="<?= $comand->id ?>" class="delete">Удалить</a></p>
                            <?php } ?>

                        <br>
                        <p>Новое название члена команды:</p>
                        <p>
                            Имя: <input id="new-name-comands" type="text"> 
                            <input id="add-new-comand" type="button" value="Добавить">
                        </p>
                    </div>


                </div>

                <div class="user-editin-kaynake" id="add-new-data">
                    <p> 
                        Начните вводить имя пользователя: 
                        <input id="players-add" type="text" autocomplete="on"/>    
                    </p>

                    <div id="users-add_events">

                    </div>

                    <p>Ссылка <input type="text" id="link-add-user" class="link"></p>
                    <p>Дата:<br> <input type="text" id="date-add-event"></p>
                    <p>Названия события: <input type="text" id="name-add-event"></p>

                    <p><input class="add_user" type="button" onclick="AddEvents()" value="Добавить" /></p>
                </div>
            <?php } ?>
            <div class='kynake_table'>
                <h2 align="center">Таблица учета по кайнаку</h2>
                <table style="border: 1px solid #000" align="center" class="table-kaynake">
                    <tr class="header-table">
                        <td>Отряд</td>
                        <td>Текущие баллы</td>
                        <td>Выдано камней</td>
                        <td>Общие баллы</td>
                        <?php
                        if (isset($days))
                            foreach ($days as $val) {
                                ?>
                                <td class="table-date"><?= $val ?></td>
                            <?php } ?>
                    </tr>


                    <?php
                    if (isset($kayanke_table))
                        foreach ($kayanke_table as $val) {
                            ?>
                            <tr class="body-table">
                                <td><?= $val['name'] ?></td>
                                <td><?= $val['curent_credits'] ?></td>
                                <td><?= $val['number_of_stone'] ?></td>
                                <td><?= $val['sum_all'] ?></td>

                                <?php
                                foreach ($days as $date) {
                                    if (isset($statistics[$val['comand_id']][$date])) {
                                        ?>
                                        <td  class="table-date">
                                            <?= $statistics[$val['comand_id']][$date] ?>
                                        </td>
                                    <?php } else { ?>
                                        <td class="table-date"></td>
                                        <?php
                                    }
                                }
                                ?>

                            </tr>                    
                        <?php } ?>
                </table>
            </div>
        </div>
        <div id="enter-modal">
            <div class="close">X</div>
            <div style="margin: 0 auto; width: 160px;">
                <form name="auth" action="/user/auth/" method="post">
                    <p style="color: #000;">Email: <input name="email" type="text" /></p>
                    <p style=" color: #000;">Пароль: <input name="password" type="password" /> </p>
                    <input type="submit" value="Войти" />
                </form>
            </div>
        </div> 

        <div id="register-modal">
            <div class="close">X</div>
            <div style="padding: 10px; width: 100%;">
                <h3 style="text-align: center">Регистрация</h3>

                <div style="width: 290px; margin: 0 auto;">
                    <form name="auth" action="/user/register/" method="post">
                        <div class="one-line">
                            <label for="username">Имя пользователя:</label> 
                            <input id="username" name="username" type="text" />
                        </div>
                        <div class="one-line">
                            <label for="email">Email:</label> 
                            <input id="email" name="email" type="text" />
                        </div>
                        <div class="one-line">
                            <label for="password">Пароль: </label> 
                            <input id="password" name="password" type="password" />
                        </div>
                        <div class="one-line">
                            <label for="password_confirm">Повторите пароль: </label> 
                            <input id="password_confirm" name="password_confirm" type="password" />
                        </div>

                        <div class="one-line">
                            <label for="comands_id">Выберите отряд: </label> 
                            <select name="comands_id">
                                <?php if (isset($comands)) foreach ($comands as $comand) { ?>
                                        <option value="<?= $comand->id ?>"><?= $comand->name ?></option>
                                    <?php } ?>

                            </select>
                        </div>
                        <br>
                        <input type="submit" value="Регистрация" />
                </div>

                </form>
            </div>
        </div>  



        <script>
            function AddEvents() {
                $.post('/events/add', {
                    users: Selected_User.getUser(),
                    link: $('#link-add-user').val(),
                    time: $('#date-add-event').val(),
                    name: $('#name-add-event').val()
                }, function(res) {
                    if (res.error) {
                        alert(res.error);
                    } else {
                        alert('Добавленно');
                    }
                }, 'json');
            }

            $(function() {
                Selected_User.set_div('#users-add_events');
                $("#players-add").autocomplete({
                    source: function(request, response) {

                        $.post('/main/search', {
                            'name': $("#players-add").val()
                        }, function(res) {

                            if (res.data) {

                                response($.map(res.data, function(item) {
                                    return {
                                        label: item,
                                        value: item
                                    }
                                }));
                            }
                        }, 'json');

                    },
                    select: function(event, ui) {
                        Selected_User.add_user(ui.item.value);
                    },
                    minLength: 3,
                });
            });



            function delete_events_players(e) {
                e.preventDefault();
                $aLink = $(this);
                $this = $aLink.parent();
                console.log('g', $this.html())

                $.get('/main/delete_players/' + $aLink.attr('id-comands'), function(res) {
                    console.log('result=', res)
                    if (res.error) {
                        alert('ошибка удаления');
                    } else {
                        $this.remove();
                    }
                }, 'json');

            }



            $('#add-new-comand').click(function(e) {
                var new_name = $('#new-name-comands').val();
                $.post('/main/add_players', {
                    'name': new_name,
                }, function(res) {
                    if (res.error) {
                        alert('Ошибка ' + res.error);
                    } else {
                        var html = '<p>' + new_name + ' ';
                        html += '<a href="#" id-comands="' + res.player_id + '" class="delete">Удалить</a></p>';
                        var $jq = $(html);
                        $jq.find('.delete').click(delete_events_players);
                        $('#comands_t').prepend($jq);
                    }
                }, 'json');
            });
            $('.delete').click(delete_events_players);

            $('#comands-list').click(function(e) {
                $comands = $('#comands_t');
                if ($comands.css('display') == 'none') {
                    $comands.show();
                } else {
                    $comands.hide();
                }
            });
        </script>

        <script>
            Pop_Up_Window.add_window('#auth .enter', '#enter-modal');
            Pop_Up_Window.add_window('#auth .ristr', '#register-modal');
            Pop_Up_Window.add_window('#kaynake a', '#kaynak-info');

            $('#add-new-data-show').click(function(e) {
                e.preventDefault();

                if ($('#add-new-data').css('display') == 'none') {
                    $('.user-editin-kaynake').hide(0);
                    $('#add-new-data').show(200);
                } else {
                    $('.user-editin-kaynake').hide(200);
                }
            });

            $('#edit-squad').click(function(e) {
                e.preventDefault();
                if ($('#edit-squad-form').css('display') == 'none') {
                    $('.user-editin-kaynake').hide(0);
                    $('#edit-squad-form').show(200);

                } else {
                    $('.user-editin-kaynake').hide(200);
                }
            });
            $.datepicker.regional['ru'] = {
                closeText: 'Закрыть',
                prevText: '<Пред ',
                nextText: ' След>',
                currentText: 'Сегодня',
                monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
                    'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
                dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
                dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
                dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                weekHeader: 'Не',
                dateFormat: 'dd.mm.yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['ru']);
            $.timepicker.regional['ru'] = {
                timeOnlyTitle: 'Выберите время',
                timeText: 'Время',
                hourText: 'Часы',
                minuteText: 'Минуты',
                secondText: 'Секунды',
                millisecText: 'Миллисекунды',
                timezoneText: 'Часовой пояс',
                currentText: 'Сейчас',
                closeText: 'Закрыть',
                timeFormat: 'HH:mm',
                amNames: ['AM', 'A'],
                pmNames: ['PM', 'P'],
                isRTL: false
            };
            $.timepicker.setDefaults($.timepicker.regional['ru']);
            $(function() {
                $('#date-add-event').datetimepicker({
                    addSliderAccess: true,
                    sliderAccessArgs: {touchonly: false}
                });
            });

            $('.close').click(function() {
                Pop_Up_Window.hide();
            });
        </script>
    </body>
</html>
