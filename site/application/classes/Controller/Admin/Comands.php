<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Comands extends Controller_Admin
{

    //public static $json_loaded = false;

    public function action_delete()
    {
        if (!Request::$current->is_ajax()) {
            throw new HTTP_Exception_404('Сюда ток ajax запросом)');
        }
        $comands_id = $this->request->param('comands_id', 0);
        $comads = ORM::factory('Comand', $comands_id);
        if (!$comads->loaded()) {
            throw new HTTP_Exception_404('Сюда ток ajax запросом)');
        }
        $comads->delete();
        $this->template->content = new ViewCore();
    }

    public function action_add()
    {
        $this->template->content = new ViewCore();
        if (!Request::$current->is_ajax()) {
            throw new HTTP_Exception_404('Сюда ток ajax запросом)');
        }

        $comand = ORM::factory('Comand');
        $comand->values($_POST, array('name'));
        try {
            $comand->save();
        } catch (ORM_Validation_Exception $e) {
            $errors = $e->errors('');

            //delete externals
            $external = $errors['_external'];
            $errors += $external;
            unset($errors['_external']);
            $this->template->content->error = array_pop($errors);
        }

        $this->template->content = new ViewCore();
    }

    public function action_index()
    {
        throw new HTTP_Exception_404;
    }

}
