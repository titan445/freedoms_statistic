<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_Comand extends ORM
{

    protected $_table_columns = array(
        'id' => '',
        'name' => '',
    );

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                
            )
        );
    }

    public function filters()
    {
        return array(
            true => array(
              array('HTML::chars'),  
            ),
        );
    }

    /**
     * 
     * @param int $comand_id
     * @return boolean
     */
    public static function isIssetComands($comand_id)
    {
        return ORM::factory('Comand', $comand_id)->count_all() > 0;
    }

}
