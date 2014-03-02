<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Core
{

    const PRICE_HONOR = 25;

    public function action_index()
    {
        //index page
        $this->template->comands = ORM::factory('Comand')->find_all();

        $modelComands = new Model_Comand();
       

        $days_extras = DB::select('day')
                ->distinct(true)
                ->from('records')
                ->order_by('day', 'DESC')
                ->limit(7)
                ->execute()
                ->as_array();
        
        $days_extras = array_map(function ($item) {
            return "'" . $item['day'] . "'";
        }, $days_extras);
        
        
         $curent_credits = $modelComands->getFullStatistics(self::PRICE_HONOR, $days_extras);
        $records = ORM::factory('Record')
                ->join('comands')
                ->on('comands.id', '=', 'id_comand')
                ->where('day', 'IN', DB::expr("(" . implode(', ', $days_extras) . ")"))
                ->order_by('record.day', 'DESC')
                ->find_all();


        $statistics = array();
        $days = array();
        foreach ($records as $val) {
            $days[$val->day] = $val->day;
            $statistics[$val->id_comand][$val->day] = $val->credits;
        }
        //natcasesort($days); //естественная сортировка
        



        $this->template->kayanke_table = $curent_credits;
        $this->template->statistics = $statistics;
        $this->template->days = $days;

        if (Auth::instance()->logged_in('party_Leader')) {
            $comads_id = Auth::instance()->get_user()->comands_id;
            $this->template->players = ORM::factory('People')
                    ->join('squad')
                    ->on('people.id', ' = ', 'person_id')
                    ->where('squad.comand_id', ' = ', $comads_id)
                    ->find_all();
        }
    }

    public function action_add_players()
    {
        $this->template->content = new ViewCore();
        if (!Auth::instance()->logged_in('party_Leader')) {
            $this->template->content->error = 'access dined';
            return;
        }

        $comads_id = Auth::instance()->get_user()->comands_id;
        $comand = ORM::factory('Comand', $comads_id);
        if (!$comand->loaded()) {
            throw new HTTP_Exception_404;
        }
        $people = ORM::factory('People');
        $people->values($_POST, array('name'));
        try {
            $people->save();
            $comand->add('people', $people);
            $this->template->content->player_id = $people->id;
        } catch (ORM_Validation_Exception $e) {
            $errors = $e->errors('');

            if (isset($errors['_external'])) {
                //delete externals
                $external = $errors['_external'];
                $errors += $external;
                unset($errors['_external']);
            }
            $this->template->content->error = array_pop($errors);
        }
    }

    public function action_delete_players()
    {
        $this->template->content = new ViewCore();
        if (!Auth::instance()->logged_in('party_Leader')) {
            $this->template->content->error = 'access dined';
            return;
        }

        $players_id = $this->request->param('id');
        $comads_id = Auth::instance()->get_user()->comands_id;
        $comand = ORM::factory('Comand', $comads_id);
        if (!$comand->loaded()) {
            throw new HTTP_Exception_404;
        }
        $people = ORM::factory('People', $players_id);
        if (!$people->loaded()) {
            throw new HTTP_Exception_404;
        }
        $comand->remove('people', $people);
        $people->delete();
    }

}

// End Welcome
