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

        return DB::select(array('people.name', 'people_name'), 'events.name', 'events.link', 'events.time')
                        ->from('events')
                        ->join('visits')
                        ->on('event_id', '=', 'events.id')
                        ->join('people')
                        ->on('visits.person_id', '=', 'people.id')
                        ->order_by("events.id", 'DESC')
                        ->limit(20)
                        ->execute();
    }

}
