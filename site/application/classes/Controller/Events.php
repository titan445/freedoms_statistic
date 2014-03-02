<?php

class Controller_Events extends Controller_Core
{

    public function action_add()
    {
        $this->template->content = new ViewCore();
        if (!Auth::instance()->logged_in('party_Leader')) {
            $this->template->content->error = 'access dined';
            return;
        }
        $users = $this->request->post('users');
        $users_array = array_map(function ($item) {
            return "'$item'";
        }, explode(', ', $users));
        $users = implode(', ', $users_array);

        if ($users === null) {
            $this->template->content->error = 'users can not be empty';
            return;
        }

        $event = ORM::factory('Event');


        $event->values($_POST, array('link', 'name'));
        try {
            $event->time = date("Y-m-d H:i:s", strtotime($this->request->post('time')));

            $people = ORM::factory('People')
                    ->where('name', 'IN', DB::expr("($users)"))
                    ->find_all();
            $people_ids = array();
            foreach ($people as $val) {
                $people_ids[] = $val->id; 
            }

            $event->save();
            $event->add('people', $people_ids);

            //@todo сделать одним join'ом
            $sql = 'INSERT INTO records (id_comand,day) VALUES ';
            foreach ($people as $lol) {
                $com = $lol->comand->find();
                if ($com->loaded()) {
                    $datetime = date("Y-m-d", strtotime($event->time));

                    $sql .= "({$com->id}, '{$datetime }'), ";
                } else {
                    $this->template->content->error = 'Ошибка 13 , обратитесь к администратору.';
                }
            }

            $sql = substr($sql, 0, strlen($sql) - 2);
            $sql .= ' ON DUPLICATE KEY UPDATE credits=credits+1';

            DB::query(Database::INSERT, $sql)
                    ->execute();
        } catch (ORM_Validation_Exception $e) {
            $errors = $e->errors('');

            if (isset($errors['_external'])) {
                //delete externals
                $external = $errors['_external'];
                $errors += $external;
                unset($errors['_external']);
            }
            $this->template->content->error = array_pop($errors);
        } /* catch (Kohana_Exception $e) {
          $this->template->content->error = 'Ошибка на сервере, попробуйте еще раз.';
          } */
    }

}
