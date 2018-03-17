<?php

namespace App\Http\Repositories;


use App\Models\Hero;
use App\Models\Team;

class TeamsRepository
{

    public function __construct()
    {


    }

    public function updateCombatPower($team_id)
    {
        //combat power is the sum of all team members attack.
        $heroes = Hero::all();
        $team = Team::find($team_id);
        $combat_power = 0;

        foreach ($heroes as $hero) {

            $hero_team = $hero->teams->first()['id'];

            if ($hero_team == $team_id) {
                $combat_power += 1;
            }

        }

        //update specific record on database
        $team->where('id', '=', $team_id)->update([
            'combat_power' => $combat_power
        ]);

    }

}