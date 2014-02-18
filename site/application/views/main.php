<!DOCTYPE html>
<html>
    <head>
        <title>Fredooms statistics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/css/style.css" media="all" />
        <script src="http://yandex.st/jquery/2.1.0/jquery.min.js"></script>
    </head>
    <body>
        <div id="auth">
            <?php 
            if(Auth::instance()->logged_in()) { ?>
                <?=Auth::instance()->get_user()->username ?>&nbsp;&nbsp;<a href="/user/logout">Выйти</a>
            <?php }  else { ?>
                 <a class="enter" href="">Вход</a> &nbsp;&nbsp; <a class="ristr" href="">Регистрация</a>
            <?php } ?>
            
           
            <?= (isset($error)? "<br><br>$error" : '')  ?>

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
        <!-- hide window -->
        <div id="kaynak-info">
            <div class="close">X</div>
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
            <div style="margin: 0 auto; width: 160px;">
                <h3 style="text-align: center">Регистрация</h3>
                <form name="auth" action="/user/register/" method="post">
                     <p style="color: #000;">Имя пользователя: <input name="username" type="text" /></p>
                    <p style="color: #000;">Email: <input name="email" type="text" /></p>
                    <p style=" color: #000;">Пароль: <input name="password" type="password" /> </p>
                    <p style=" color: #000;">Повторите пароль: <input name="password_confirm" type="password" /> </p>
                    <input type="submit" value="Регистрация" />
                </form>
            </div>
        </div>  


        <script>
            $('#auth .enter').click(function(e) {
                e.preventDefault();
                $('#enter-modal').show(200);
            });
            $('#auth .ristr').click(function(e) {
                e.preventDefault();
                $('#register-modal').show(200);
            });


            $('#kaynake a').click(function(e) {
                e.preventDefault();
                $('#kaynak-info').show(200);

            });


            $('.close').click(function() {
                var $parent = $(this).parent();
                $parent.fadeOut(200);
            });
        </script>
    </body>
</html>
