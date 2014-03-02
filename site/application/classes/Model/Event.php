<?php

class Model_Event extends ORM
{

    protected $_table_columns = array(
        'id' => '',
        'name' => '',
        'link' => '',
        'time' => '',
    );

    
    protected $_has_many = array(
        'people' => array(
            'model' => 'People',
            'through' => 'visits',
            'far_key' => 'person_id',       
            'foreign_key' => 'event_id' 
        )
    );
    
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            'link' => array(
                array('not_empty'),
            ),
            'time' => array(
                array('not_empty'),
            ),
        );
    }

    public function filters()
    {
        return array(
            true => array(
                array('HTML::chars'),
                array('UTF8::trim'),
            ),
        );
    }

    public function getFullInform()
    {

        $last_ids = implode(', ', $this->getIdsLastEvents(100));
        return DB::select(array('people.name', 'people_name'), 'events.name', 'events.link', 'events.time', 'events.id')
                        ->from('events')
                        ->join('visits')
                        ->on('event_id', '=', 'events.id')
                        ->join('people')
                        ->on('visits.person_id', '=', 'people.id')
                        ->where('events.id', 'IN', DB::expr("($last_ids)"))
                        ->order_by("events.id", 'DESC')
                        ->limit(100)
                        ->execute();
        
    }
    
    public function getIdsLastEvents($limit) {
        $events = DB::select('id')
                ->from('events')
                ->order_by('id', 'DESC')
                ->limit($limit)
                ->execute();
        $events_ids = array();
        foreach ($events as $id) {
            $events_ids[] = "'{$id['id']}'";
        }
        return $events_ids;
    }

}
