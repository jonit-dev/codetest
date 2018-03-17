<?php

namespace App\Http\Repositories;


use App\Models\Hero;
use App\Models\Team;

class HeroesRepositoy
{

    public function __construct()
    {


    }

    public function checkTeamAvailable($hero, $team_id)
    {
        //check if hero is allowed to be inserted in some team
        $hero = Hero::find($hero);


        //if hero has no team, allowed to attaching

        if (count($hero->teams) === 0) {
            return true;
        } else {

            //if the hero has a team, lets verify if its not the same team that we are trying to attach
            foreach ($hero->teams as $team) {
                if ($team->id == $team_id) {
                    return false;
                }
            }

            return true;


        }


    }

}