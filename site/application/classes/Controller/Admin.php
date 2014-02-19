<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Core
{

    public $template = 'admin/main';

    public function before()
    {
        if (!Auth::instance()->logged_in('admin')) {
            throw new HTTP_Exception_404;
        }

        parent::before();
    }

    public function action_index()
    {
        $this->template->comands = ORM::factory('Comand')->find_all();
        
    }

}
