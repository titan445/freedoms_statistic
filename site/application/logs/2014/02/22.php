<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-22 10:14:22 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-22 10:14:22 --- DEBUG: #0 J:\home\stat.ru\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#2 {main} in J:\home\stat.ru\www\system\classes\Kohana\Request.php:975
2014-02-22 10:25:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\People.php [ 18 ] in file:line
2014-02-22 10:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-22 11:55:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'test' in 'where clause' [ SELECT `people`.`id` AS `id`, `people`.`name` AS `name` FROM `people` AS `people` WHERE `name` IN (test) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 11:55:55 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `people`...', 'Model_People', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Events.php(25): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:00:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comand ~ APPPATH\classes\Controller\Events.php [ 34 ] in J:\home\stat.ru\www\application\classes\Controller\Events.php:34
2014-02-22 12:00:34 --- DEBUG: #0 J:\home\stat.ru\www\application\classes\Controller\Events.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'J:\home\stat.ru...', 34, Array)
#1 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in J:\home\stat.ru\www\application\classes\Controller\Events.php:34
2014-02-22 12:04:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'squad.people_id' in 'where clause' [ SELECT `comand`.`id` AS `id`, `comand`.`name` AS `name` FROM `comands` AS `comand` JOIN `squad` ON (`squad`.`comand_id` = `comand`.`id`) WHERE `squad`.`people_id` = '26' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:04:43 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Events.php(37): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:06:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'squad.people_id' in 'where clause' [ SELECT `comand`.`id` AS `id`, `comand`.`name` AS `name` FROM `comands` AS `comand` JOIN `squad` ON (`squad`.`comand_id` = `comand`.`id`) WHERE `squad`.`people_id` = '26' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:06:47 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', 'Model_Comand', Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 J:\home\stat.ru\www\application\classes\Controller\Events.php(37): Kohana_ORM->find_all()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:07:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'squad.people_id' in 'where clause' [ SELECT `comand`.`id` AS `id`, `comand`.`name` AS `name` FROM `comands` AS `comand` JOIN `squad` ON (`squad`.`comand_id` = `comand`.`id`) WHERE `squad`.`people_id` = '26' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:07:46 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 J:\home\stat.ru\www\application\classes\Controller\Events.php(37): Kohana_ORM->find()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:08:24 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'squad.people_id' in 'where clause' [ SELECT `comand`.`id` AS `id`, `comand`.`name` AS `name` FROM `comands` AS `comand` JOIN `squad` ON (`squad`.`comand_id` = `comand`.`id`) WHERE `squad`.`people_id` = '26' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:08:24 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comand`...', false, Array)
#1 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 J:\home\stat.ru\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 J:\home\stat.ru\www\application\classes\Controller\Events.php(37): Kohana_ORM->find()
#4 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:12:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:12:03 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(47): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:13:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:13:15 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(47): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:14:33 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' '13.02.2014 15:34', 1)), ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES (, '13.02.2014 15:34', 1)), ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:14:33 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(45): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:14:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' '13.02.2014 15:34', 1)), ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES (, '13.02.2014 15:34', 1)), ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:14:34 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(45): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:15:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:15:51 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(49): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:16:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:16:20 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(50): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:25:00 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:25:00 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(52): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:26:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '), ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES (9, '13.02.2014 15:34', 1)), ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:26:39 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(51): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:28:43 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE credits=credits+1' at line 1 [ INSERT INTO records (id_comand,day,credits) VALUES (9, '13.02.2014 15:34', 1), ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:28:43 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(51): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:43:28 --- CRITICAL: Database_Exception [ 1048 ]: Column 'day' cannot be null [ INSERT INTO records (id_comand,day,credits) VALUES (9, STR_TO_DATE('18.02.2014 00:00', '%m/%d/%Y'), 1) ON DUPLICATE KEY UPDATE credits=credits+1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2014-02-22 12:43:28 --- DEBUG: #0 J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO rec...', false, Array)
#1 J:\home\stat.ru\www\application\classes\Controller\Events.php(50): Kohana_Database_Query->execute()
#2 J:\home\stat.ru\www\system\classes\Kohana\Controller.php(84): Controller_Events->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\home\stat.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#5 J:\home\stat.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\home\stat.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\home\stat.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in J:\home\stat.ru\www\modules\database\classes\Kohana\Database\Query.php:251