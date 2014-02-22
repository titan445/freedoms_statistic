<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_People extends Controller_Core
{

    public function action_search()
    {
        $this->template->content = new ViewCore();

        $mas_name = ORM::factory('People')
                ->where('name', 'LIKE', DB::expr("'%{$this->request->post('name')}%'"))
                
                ->find_all();
                
                
        $users = array();
           foreach ($mas_name as $name) {
             $users[] = $name->name;  
           }

        $this->template->content->data = $users ;
    }

}
