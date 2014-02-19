<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-19 00:22:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-19 00:22:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#2 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-19 01:46:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comands ~ APPPATH\views\main.php [ 118 ] in J:\home\stat.ru\www\application\views\main.php:118
2014-02-19 01:46:12 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(118): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 118, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:118
2014-02-19 02:26:36 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Admin.php [ 13 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:26:36 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:27:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Admin.php [ 13 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:27:05 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:27:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Admin.php [ 13 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:27:29 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:69
2014-02-19 02:56:46 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerCore' not found ~ APPPATH\classes\Controller\Core.php [ 30 ] in file:line
2014-02-19 02:56:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-19 02:57:12 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Сюда ток ajax запросом) ~ APPPATH\classes\Controller\Admin\Comands.php [ 16 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-19 02:57:12 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_delete()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-19 02:59:19 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerCore' not found ~ APPPATH\classes\Controller\Core.php [ 30 ] in file:line
2014-02-19 02:59:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-19 02:59:57 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerCore' not found ~ APPPATH\classes\Controller\Core.php [ 30 ] in file:line
2014-02-19 02:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-19 03:00:25 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in J:\home\stat.ru\www\application\classes\Controller\Core.php:39
2014-02-19 03:00:25 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Core.php(39): Kohana_View->__get('content')
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Core.php:39
2014-02-19 03:18:37 --- CRITICAL: ReflectionException [ 0 ]: Function HTML:chars() does not exist ~ MODPATH\orm\classes\Kohana\ORM.php [ 1215 ] in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1215
2014-02-19 03:18:37 --- DEBUG: #0 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1215): ReflectionFunction->__construct('HTML:chars')
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('name', '????????_??????')
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('name', '????????_??????')
#3 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('name', '????????_??????')
#4 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(32): Kohana_ORM->values(Array, Array)
#5 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1215