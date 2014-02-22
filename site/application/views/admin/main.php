<!DOCTYPE html>
<html>
    <head>
        <title>Fredooms statistics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="http://yandex.st/jquery/2.1.0/jquery.min.js"></script>
    </head>
    <body>
        <p align="center">
            <a href="/admin">Main</a>&nbsp; 
            <a href="/admin/user">Managmend Users</a>&nbsp;  
            <a href="/admin/event">Event</a>&nbsp;
        </p>
        <?= (isset($content) ? $content : '' ) ?>
    </body>
</html>
