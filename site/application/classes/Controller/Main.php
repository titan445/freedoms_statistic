<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Core {

    public function action_index() {
        //index page
        $this->template->comands =  ORM::factory('Comand')->find_all();
    }
    
    public function action_kaynake () {
        
    }

}

// End Welcome
