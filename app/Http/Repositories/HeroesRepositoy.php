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
        $heroes = Hero::all();
        $team = Team::find($team_id);
        $heroes_on_team = 0;

        //count how many heroes are already on this team
        foreach($heroes as $h) {
            if($h->teams->first()['id'] == $team_id) {
                $heroes_on_team++;
            }
        }

        if($heroes_on_team >= $team->max_size) {
            return false;
        }

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