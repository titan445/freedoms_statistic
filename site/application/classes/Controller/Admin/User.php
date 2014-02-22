<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin
{

    public function action_index()
    {
        $this->template->content = new ViewCore('admin/user');
        $this->template->content->users = ORM::factory('User')->find_all();
        $this->template->content->roles = ORM::factory('Role')->find_all();
    }

    public function action_delete_roles()
    {
        $this->template->content = new ViewCore('admin/user');

        $user_id = $this->request->post('user_id');
        $role_id = $this->request->post('role_id');

        $user = ORM::factory('User', $user_id);
        if ($user->loaded()) {
            $user->remove('roles', $role_id);
        } else {
            throw new HTTP_Exception_404;
        }
    }

    public function action_add_role()
    {
        $this->template->content = new ViewCore('admin/user');

        $user_id = $this->request->post('user_id');
        $role_id = $this->request->post('role_id');

        $user = ORM::factory('User', $user_id);
        if ($user->loaded()) {
            $user->add('roles', $role_id);
        } else {
            throw new HTTP_Exception_404;
        }
    }

}
