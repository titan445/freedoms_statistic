<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Event extends Controller_Admin
{

    public function action_index()
    {

        $this->template->content = new ViewCore('admin/event');
       
        $eventsModel = new Model_Event();
        
        $events =$eventsModel->getFullInform()->as_array();

        $event_group = array();
        foreach ($events as $event){
            if(!isset($event_group[$event['id']])) {
                $event_group[$event['id']] = array(
                    'name' => $event['name'],
                    'time' => $event['time'],
                    'players' => array(),
                    'link' => $event['link'],
                );
            }
            
            $event_group[$event['id']]['players'][] = $event['people_name'];
            
        }
            
       $this->template->content->events =$event_group;
      
       
    }

}
