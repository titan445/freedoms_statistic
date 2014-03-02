<?php

class Model_People extends ORM
{

    protected $_has_many = array(
        'comand' => array(
            'model' => 'Comand',
            'through' => 'squad',
            'far_key' => 'comand_id',
            'foreign_key' => 'person_id'
        ),
        'event' => array(
            'model' => 'Event',
            'through' => 'visits',
            'far_key' => 'event_id',
            'foreign_key' => 'person_id'
        ),
    );

    public function rules()
    {
        return array(
            'name' => array(
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

}
