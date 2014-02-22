<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-21 00:44:39 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-21 00:44:39 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#2 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-21 00:58:32 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 00:58:32 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 00:59:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comands ~ APPPATH\views\admin\index.php [ 23 ] in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 00:59:25 --- DEBUG: #0 J:\home\stat.ru\www\application\views\admin\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 23, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 J:\home\stat.ru\www\application\views\admin\main.php(10): Kohana_View->__toString()
#5 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#6 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#7 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 00:59:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comands ~ APPPATH\views\admin\index.php [ 23 ] in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 00:59:29 --- DEBUG: #0 J:\home\stat.ru\www\application\views\admin\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 23, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 J:\home\stat.ru\www\application\views\admin\main.php(10): Kohana_View->__toString()
#5 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#6 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#7 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 00:59:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comands ~ APPPATH\views\admin\index.php [ 23 ] in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 00:59:30 --- DEBUG: #0 J:\home\stat.ru\www\application\views\admin\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 23, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 J:\home\stat.ru\www\application\views\admin\main.php(10): Kohana_View->__toString()
#5 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#6 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#7 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in J:\home\stat.ru\www\application\views\admin\index.php:23
2014-02-21 01:25:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: users ~ MODPATH\orm\classes\Kohana\ORM.php [ 1602 ] in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1602
2014-02-21 01:25:53 --- DEBUG: #0 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1602): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 1602, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(24): Kohana_ORM->remove('users', '1')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_delete_roles()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1602
2014-02-21 01:37:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:37:15 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', NULL)
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:37:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:37:58 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', NULL)
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:38:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:38:30 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', NULL)
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:38:57 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:38:57 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', NULL)
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:39:16 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:39:16 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:39:22 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:39:22 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:41:17 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('2', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:41:17 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(40): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:29 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:29 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:29 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:29 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:30 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:31 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:31 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 01:45:32 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\User.php(39): Kohana_ORM->add('roles', '1')
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add_role()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:15:08 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:08 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:47 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:47 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:48 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:48 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/event was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:15:49 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 02:16:01 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in order clause is ambiguous [ SELECT * FROM `events` JOIN `visits` ON (`id_event` = `events`.`id`) JOIN `people` ON (`visits`.`id_people` = `people`.`id`) ORDER BY `id` DESC LIMIT 20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:16:01 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Model\Event.php(23): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\Event.php(13): Model_Event->getFullInform()
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Event->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Event))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:31:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM `events` JOIN `visits` ON (`id_event` = `events`.`id`) JOIN `people` ON (' at line 1 [ SELECT `people`.`name` AS `people_name`, * FROM `events` JOIN `visits` ON (`id_event` = `events`.`id`) JOIN `people` ON (`visits`.`id_people` = `people`.`id`) ORDER BY `events`.`id` DESC LIMIT 20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:31:28 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Model\Event.php(31): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\Event.php(14): Model_Event->getFullInform()
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Event->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Event))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:31:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM `events` JOIN `visits` ON (`id_event` = `events`.`id`) JOIN `people` ON (' at line 1 [ SELECT `people`.`name` AS `people_name`, * FROM `events` JOIN `visits` ON (`id_event` = `events`.`id`) JOIN `people` ON (`visits`.`id_people` = `people`.`id`) ORDER BY `events`.`id` DESC LIMIT 20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:31:38 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Model\Event.php(31): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\application\classes\Controller\Admin\Event.php(14): Model_Event->getFullInform()
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Event->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Event))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 02:43:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: people_name ~ APPPATH\views\admin\event.php [ 15 ] in J:\home\stat.ru\www\application\views\admin\event.php:15
2014-02-21 02:43:40 --- DEBUG: #0 J:\home\stat.ru\www\application\views\admin\event.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 15, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 J:\home\stat.ru\www\application\views\admin\main.php(15): Kohana_View->__toString()
#5 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#6 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#7 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Event))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in J:\home\stat.ru\www\application\views\admin\event.php:15
2014-02-21 03:46:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'honors.id_comands' in 'on clause' [ SELECT (( SELECT SUM(credits) FROM records WHERE records.id_comand  = comands.id) - 1*honors.number_of_stone ) AS `curent_credits`, `number_of_stone`, `name`, ( SELECT SUM(credits) FROM records WHERE records.id_comand  = comands.id) AS `sum_all` FROM `comands` JOIN `records` ON (`comands`.`id` = `records`.`id_comand`) JOIN `honors` ON (`honors`.`id_comands` = `records`.`id_comands`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 03:46:14 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (( SELEC...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Model\Comand.php(54): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\application\classes\Controller\Main.php(16): Model_Comand->getFullStatistics(1)
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 03:52:57 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 77 ] in J:\home\stat.ru\www\application\views\main.php:77
2014-02-21 03:52:57 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', 'J:\home\stat.ru...', 77, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:77
2014-02-21 03:53:59 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 77 ] in J:\home\stat.ru\www\application\views\main.php:77
2014-02-21 03:53:59 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', 'J:\home\stat.ru...', 77, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:77
2014-02-21 04:13:03 --- CRITICAL: ErrorException [ 2 ]: array_map() [function.array-map]: Argument #2 should be an array ~ MODPATH\database\classes\Kohana\Database\Expression.php [ 129 ] in file:line
2014-02-21 04:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map() [<a...', 'J:\home\stat.ru...', 129, Array)
#1 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Expression.php(129): array_map(Array, 'comands.id')
#2 J:\home\stat.ru\www\modules\database\classes\Kohana\Database.php(519): Kohana_Database_Expression->compile(Object(Database_MySQL))
#3 [internal function]: Kohana_Database->quote_column(Array)
#4 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#5 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 J:\home\stat.ru\www\application\classes\Model\Comand.php(54): Kohana_Database_Query->execute()
#7 J:\home\stat.ru\www\application\classes\Controller\Main.php(16): Model_Comand->getFullStatistics(1)
#8 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-02-21 04:14:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comand.id' in 'on clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comand`.`id` = `records`.`id_comand`) ORDER BY `date` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:14:13 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:14:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'records.id_comand' in 'on clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `records`.`id_comand`) ORDER BY `date` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:14:28 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:15:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'records.id_comand' in 'on clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `records`.`id_comand`) ORDER BY `date` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:15:51 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:16:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'order clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `id_comand`) ORDER BY `date` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:16:29 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:16:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'records.date' in 'order clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `id_comand`) ORDER BY `records`.`date` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:16:46 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:17:01 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'record.time' in 'order clause' [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `id_comand`) ORDER BY `record`.`time` DESC LIMIT 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 04:17:01 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:06:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:02 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:02 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:02 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Admin\Comands.php [ 39 ] in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:06:03 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 39, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Comands->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comands))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Admin\Comands.php:39
2014-02-21 06:19:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: people ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1567
2014-02-21 06:19:04 --- DEBUG: #0 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 1567, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Main.php(64): Kohana_ORM->add('people', Object(Model_People))
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1567
2014-02-21 06:28:02 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `squad` (`comand_id`, `person_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:28:02 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sq...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Main.php(64): Kohana_ORM->add('people', Object(Model_People))
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:28:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1302
2014-02-21 06:28:42 --- DEBUG: #0 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 J:\home\stat.ru\www\application\classes\Controller\Main.php(63): Kohana_ORM->save()
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php:1302
2014-02-21 06:29:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'person_id' in 'field list' [ INSERT INTO `squad` (`comand_id`, `person_id`) VALUES ('9', 3) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:29:25 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sq...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Main.php(67): Kohana_ORM->add('people', Object(Model_People))
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:30:35 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\Kohana\View.php [ 171 ] in J:\home\stat.ru\www\application\classes\Controller\Core.php:39
2014-02-21 06:30:35 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Core.php(39): Kohana_View->__get('content')
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Core.php:39
2014-02-21 06:31:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'squad.id_comand' in 'where clause' [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` JOIN `squad` ON (`people`.`id` = `id_people`) WHERE `squad`.`id_comand` = '9' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:31:25 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Main.php(45): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:33:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Main.php [ 70 ] in J:\home\stat.ru\www\application\classes\Controller\Main.php:70
2014-02-21 06:33:27 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Main.php(70): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 70, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Main.php:70
2014-02-21 06:33:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\classes\Controller\Main.php [ 70 ] in J:\home\stat.ru\www\application\classes\Controller\Main.php:70
2014-02-21 06:33:28 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Main.php(70): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\home\stat.ru...', 70, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Main.php:70
2014-02-21 06:34:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `squad` (`comand_id`, `person_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:34:01 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sq...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\application\classes\Controller\Main.php(79): Kohana_ORM->add('people', Object(Model_People))
#3 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_add_players()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 06:39:31 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 98 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:39:31 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:40:34 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 98 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:40:34 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:40:34 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 98 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:40:34 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:41:22 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in J:\home\stat.ru\www\application\classes\Controller\Main.php:95
2014-02-21 06:41:22 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Main.php(95): Kohana_ORM->find()
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Main.php:95
2014-02-21 06:46:58 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:46:58 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:46:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:46:59 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:00 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:00 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:01 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:01 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:01 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:47:01 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:10 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:10 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:11 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:50 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main.php [ 96 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 06:48:50 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete_players()
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:84
2014-02-21 07:22:37 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL kaynake was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 07:22:37 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:01:50 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL kaynake was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:01:50 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:01:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL kaynake was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:01:59 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:02:01 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL kaynake was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 09:02:01 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 11:06:16 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL search was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:06:16 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:06:48 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL search was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:06:48 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:06:57 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL search was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:06:57 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#4 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php:79
2014-02-21 11:07:57 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:07:57 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:09:17 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:09:17 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:12:30 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:12:30 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:12:56 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:12:56 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:13:41 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL main/search was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 11:13:41 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#6 {main} in J:\home\stat.ru\www\system\classes\Kohana\Controller.php:80
2014-02-21 11:14:57 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:14:57 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:15:26 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:15:26 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:15:28 --- CRITICAL: View_Exception [ 0 ]: The requested view /main/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:15:28 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/main/')
#1 J:\home\stat.ru\www\application\classes\Controller\People.php(10): Kohana_View->__construct('/main/')
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\system\classes\Kohana\View.php:137
2014-02-21 11:16:04 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%%' at line 1 [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE %% ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:16:04 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:17:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:17:11 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:17:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:17:14 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:18:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:18:55 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:36:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tes' in 'where clause' [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE tes ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:36:50 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:37:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tes' in 'where clause' [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE tes ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:37:44 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:38:02 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%tes%' at line 1 [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` LIKE %tes% ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:38:02 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\People.php(14): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-21 11:40:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\People.php [ 16 ] in file:line
2014-02-21 11:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-21 11:41:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\People.php [ 19 ] in file:line
2014-02-21 11:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-21 11:41:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant data - assumed 'data' ~ APPPATH\classes\Controller\People.php [ 20 ] in J:\home\stat.ru\www\application\classes\Controller\People.php:20
2014-02-21 11:41:40 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\People.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', 'J:\home\stat.ru...', 20, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_People->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\People.php:20
2014-02-21 11:43:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: players ~ APPPATH\views\main.php [ 135 ] in J:\home\stat.ru\www\application\views\main.php:135
2014-02-21 11:43:55 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 135, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:135
2014-02-21 11:45:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: players ~ APPPATH\views\main.php [ 135 ] in J:\home\stat.ru\www\application\views\main.php:135
2014-02-21 11:45:30 --- DEBUG: #0 J:\home\stat.ru\www\application\views\main.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\home\stat.ru...', 135, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\View.php(61): include('J:\home\stat.ru...')
#2 J:\home\stat.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\home\stat.ru...', Array)
#3 J:\home\stat.ru\www\application\classes\Controller\Core.php(49): Kohana_View->render()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(87): Controller_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_People))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\application\views\main.php:135