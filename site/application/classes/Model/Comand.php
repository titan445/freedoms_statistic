<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_Comand extends ORM
{

    protected $_table_columns = array(
        'id' => '',
        'name' => '',
    );
    protected $_has_many = array(
        'people' => array(
            'model' => 'People',
            'through' => 'squad',
            'far_key' => 'person_id',
            'foreign_key' => 'comand_id'
        )
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

 public function getFullStatistics($price_one_honors)
    {
        $calc_curent_day = DB::expr('(( SELECT SUM(credits) FROM records '
                        . 'WHERE records.id_comand  = comands.id) - :const_price_honor*honors.number_of_stone )');
        $calc_all_sum = DB::expr('( SELECT SUM(credits) FROM records WHERE records.id_comand  = comands.id)');

        return DB::select(array($calc_curent_day, 'curent_credits'), 'number_of_stone', 'name', array($calc_all_sum, 'sum_all'), array('comands.id', 'comand_id'))
                ->distinct(TRUE)
                        ->from('comands')
                        ->join('records')
                        ->on('comands.id', '=', 'records.id_comand')
                        ->join('honors')
                        ->on('honors.id_comand', '=', 'records.id_comand')
                        ->param(':const_price_honor', $price_one_honors)
                        ->execute();
    }

}
