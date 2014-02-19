<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Core
{

    public function action_auth()
    {
        $this->template->comands = ORM::factory('Comand')->find_all();

        if (HTTP_Request::POST == $this->request->method()) {
            $post = Arr::map('HTML::chars', $this->request->post());
            print_r($post);
            $validate = Validation::factory($post)
                    ->rules('email', array(
                        array('not_empty'),
                        array('email'),
                    ))
                    ->rules('password', array(
                array('not_empty')
            ));

            if (!$validate->check()) {
                print_r($validate->errors());
                $this->template->error = 'Ошибка, поля заполнены не верно.';
                return;
            }


            $user = Auth::instance()->login($post['email'], $post['password'], TRUE);

            if (!$user) {
                $this->template->error = 'Не верная комбинация имени пользователя и/или пароля';
            } else {
                $this->redirect('/', 302);
            }
        } else {
            $this->template->error = 'Не удалось авторизировать пользователя';
        }
    }

    public function action_register()
    {
        $this->template->comands = ORM::factory('Comand')->find_all();
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $user = ORM::factory('User')
                        ->create_user($_POST, array('comands_id', 'username', 'email', 'password'))    // Регистрируем пользователя
                        ->add('roles', ORM::factory('role', array('name' => 'login')));  // Добавляем роль login

                Auth::instance()->force_login($user->email);
                $this->redirect('/', 302);
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('');

                //delete externals
                $external = $errors['_external'];
                $errors += $external;
                unset($errors['_external']);

                $this->template->error = array_pop($errors);
            }
        } else
            $this->template->error = 'Не удалось авторизировать пользователя';
    }

    public function action_logout()
    {
        $this->template->comands = ORM::factory('Comand')->find_all();
        Auth::instance()->logout();
        if ($this->request === Request::initial()) {
            $this->redirect('/', 302);
        }
    }

}
