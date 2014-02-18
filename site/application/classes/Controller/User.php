<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Core {

    public function action_auth() {
        if (HTTP_Request::POST == $this->request->method()) {

            $post = Arr::map('HTML::chars', $this->request->post());

            $validate = Validation::factory($post)
                    ->rules('email', array(
                        array('not_empty'),
                        array('email'),
                    ))
                    ->rules('passsword', array(
                array('not_empty')
            ));


            if (!$validate->check()) {
                $this->template->error = 'Ошибка, поля заполнены не верно.';
                return;
            }


            $user = Auth::instance()->login($post['email'], $post['password'], TRUE);

            if ($user) {
                $this->template->content = ViewCore::factory('user/widget');
            } else {
                $this->template->error = 'Не верная комбинация имени пользователя и/или пароля';
            }
        } else if (!Auth::instance()->logged_in()) {
            $this->template->error = 'Не удалось авторизировать пользователя';
        } else
            $this->redirect('/', 302);
    }

    public function action_register() {
        if (HTTP_Request::POST == $this->request->method()) {
            try {
                $user = ORM::factory('User')
                        ->create_user($_POST, array('username', 'email', 'password'))    // Регистрируем пользователя
                        ->add('roles', ORM::factory('role', array('name' => 'login')));  // Добавляем роль login

                Auth::instance()->force_login($user->email);
                $this->redirect('/', 302);
            } catch (ORM_Validation_Exception $e) {
                print_r($e->errors());
                $this->template->error = 'Ошибка, поля заполнены не верно.';
            }
        } else if (!Auth::instance()->logged_in())
            $this->template->error = 'Не удалось авторизировать пользователя';
        else
            throw new HTTP_Exception_404;
    }

    public function action_logout() {
        Auth::instance()->logout();
        if ($this->request === Request::initial()) {
            $this->redirect('/', 302);
        }
    }

}
