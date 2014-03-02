<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-25 10:36:51 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'freedoms_stat'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:36:51 --- DEBUG: #0 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#2 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#4 Z:\home\stat.ru\www\application\classes\Controller\Main.php(13): Kohana_ORM->find_all()
#5 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:36:52 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-25 10:36:52 --- DEBUG: #0 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-25 10:37:47 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'freedoms_stat'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:37:47 --- DEBUG: #0 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#2 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#4 Z:\home\stat.ru\www\application\classes\Controller\Main.php(13): Kohana_ORM->find_all()
#5 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:37:52 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'freedoms_stat'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:37:52 --- DEBUG: #0 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#2 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#4 Z:\home\stat.ru\www\application\classes\Controller\Main.php(13): Kohana_ORM->find_all()
#5 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:40:32 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'freedoms_stat'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:40:32 --- DEBUG: #0 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#2 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#4 Z:\home\stat.ru\www\application\classes\Controller\Main.php(13): Kohana_ORM->find_all()
#5 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-02-25 10:57:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\classes\Controller\Events.php [ 29 ] in file:line
2014-02-25 10:57:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 10:58:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Events.php [ 29 ] in file:line
2014-02-25 10:58:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 11:05:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Events.php [ 36 ] in file:line
2014-02-25 11:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 11:06:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ',' or ';' ~ APPPATH\classes\Controller\Events.php [ 35 ] in file:line
2014-02-25 11:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 12:05:57 --- CRITICAL: Database_Exception [ 1111 ]: Invalid use of group function [ SELECT `record`.`id` AS `id`, `record`.`id_comand` AS `id_comand`, `record`.`day` AS `day`, `record`.`credits` AS `credits` FROM `records` AS `record` JOIN `comands` ON (`comands`.`id` = `id_comand`) WHERE `day` > MAX(day) ORDER BY `record`.`day` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-25 12:05:57 --- DEBUG: #0 Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `record`...', 'Model_Record', Array)
#1 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\stat.ru\www\application\classes\Controller\Main.php(24): Kohana_ORM->find_all()
#4 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-25 12:10:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Main.php [ 25 ] in file:line
2014-02-25 12:10:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 12:13:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Main.php [ 36 ] in file:line
2014-02-25 12:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 12:13:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Main.php [ 36 ] in file:line
2014-02-25 12:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-25 12:13:22 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant IN - assumed 'IN' ~ APPPATH\classes\Controller\Main.php [ 33 ] in Z:\home\stat.ru\www\application\classes\Controller\Main.php:33
2014-02-25 12:13:22 --- DEBUG: #0 Z:\home\stat.ru\www\application\classes\Controller\Main.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\stat.ru...', 33, Array)
#1 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\stat.ru\www\application\classes\Controller\Main.php:33
2014-02-25 12:13:32 --- CRITICAL: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\Controller\Main.php [ 33 ] in file:line
2014-02-25 12:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'Z:\home\stat.ru...', 33, Array)
#1 Z:\home\stat.ru\www\application\classes\Controller\Main.php(33): implode(', ', 'Array)')
#2 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-02-25 12:15:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: days_extras ~ APPPATH\classes\Model\Comand.php [ 62 ] in Z:\home\stat.ru\www\application\classes\Model\Comand.php:62
2014-02-25 12:15:28 --- DEBUG: #0 Z:\home\stat.ru\www\application\classes\Model\Comand.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\stat.ru...', 62, Array)
#1 Z:\home\stat.ru\www\application\classes\Controller\Main.php(31): Model_Comand->getFullStatistics(25, Array)
#2 Z:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\stat.ru\www\application\classes\Model\Comand.php:62