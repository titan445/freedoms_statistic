<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User
{

    protected $_table_columns = array(
        'id' => '',
        'email' => '',
        'username' => '',
        'password' => '',
        'logins' => '',
        'last_login' => '',
        'comands_id' => '',
    );
    
    protected $_has_one = array(
        'сomand' => array(
            'model' => 'Comand',
            'foreign_key' => 'comands_id',
        ),
    );

    public function rules()
    {
        return parent::rules() + array(
            'comands_id' => array(
                array('not_empty'),
                array('digit'),
                array('Model_Comand::isIssetComands'),
                
            ),
        );
    }

    public function filters()
    {
        return parent::filters() + array(
            true => array(
                array('HTML::chars'),
            ),
        );
    }

    

}
