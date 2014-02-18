<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-18 05:38:57 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 05:38:57 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 05:41:48 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL dsdas was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:41:48 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:41:48 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 05:41:48 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/default')
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/default', NULL)
#2 J:\home\stat.ru\www\application\classes\HTTP\Exception.php(27): Kohana_View::factory('errors/default')
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception->get_response()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 05:42:56 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL dsdas was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:42:56 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:43:07 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL dsdas was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:43:07 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 05:43:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 4 ] in file:line
2014-02-18 05:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 06:00:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-18 06:00:20 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#2 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-18 06:36:30 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 06:36:30 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 06:46:08 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 06:46:08 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-18 06:46:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_User::no_auth() ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-02-18 06:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 06:47:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in J:\home\stat.ru\www\system\classes\Kohana\Cookie.php:67
2014-02-18 06:47:14 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 J:\home\stat.ru\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in J:\home\stat.ru\www\system\classes\Kohana\Cookie.php:67
2014-02-18 07:01:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:01:46 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:02:08 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'chars' ~ APPPATH\classes\Controller\User.php [ 10 ] in file:line
2014-02-18 07:02:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 07:02:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:02:26 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:02:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:02:38 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:03:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:03:47 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:03:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:03:57 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:07:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 10 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:07:14 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 10, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:10
2014-02-18 07:07:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\User.php [ 12 ] in J:\home\stat.ru\www\application\classes\Controller\User.php:12
2014-02-18 07:07:23 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\User.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 12, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\User.php:12
2014-02-18 07:14:24 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-18 07:14:24 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-18 07:14:41 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'freedoms_stat'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-18 07:14:41 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 J:\home\stat.ru\www\application\classes\Controller\User.php(44): Kohana_ORM::factory('User')
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-18 07:16:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2014-02-18 07:16:50 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('123456')
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', '123456')
#3 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', '123456')
#4 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password', '123456')
#5 J:\home\stat.ru\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#6 J:\home\stat.ru\www\application\classes\Controller\User.php(45): Model_Auth_User->create_user(Array, Array)
#7 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-02-18 07:24:33 --- CRITICAL: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:702
2014-02-18 07:24:33 --- DEBUG: #0 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password_confir...', '12345678')
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password_confir...', '12345678')
#2 J:\home\stat.ru\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 J:\home\stat.ru\www\application\classes\Controller\User.php(45): Model_Auth_User->create_user(Array, Array)
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:702
2014-02-18 07:25:49 --- CRITICAL: View_Exception [ 0 ]: The requested view user/widget could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 07:25:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/widget')
#1 J:\home\stat.ru\www\application\classes\ViewCore.php(12): Kohana_View->__construct('user/widget', NULL)
#2 J:\home\stat.ru\www\application\classes\Controller\User.php(48): ViewCore::factory('user/widget')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-18 07:26:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 50 ] in file:line
2014-02-18 07:26:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 07:27:50 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 58 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:27:50 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:28:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 58 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:28:46 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:29:19 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 58 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:29:19 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:30:22 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 58 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:30:22 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:31:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 59 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:31:02 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:31:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 50 ] in file:line
2014-02-18 07:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 07:32:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\User.php [ 57 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:32:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_User->action_register()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-18 07:33:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\User.php [ 38 ] in file:line
2014-02-18 07:33:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 07:36:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 17 ] in file:line
2014-02-18 07:36:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-18 07:36:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Auth_ORM::$get_user ~ APPPATH\views\main.php [ 14 ] in J:\home\stat.ru\www\application\views\main.php:14
2014-02-18 07:36:45 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'J:\home\stat.ru...', 14, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:14