<?php

class Model_Squad extends ORM
{

    protected $_table_name = 'squad';
    protected $_has_many = array(
        'people' => array(
            'model' => 'People',
            'foreign_key' => 'person_id',
        )
    );

}
