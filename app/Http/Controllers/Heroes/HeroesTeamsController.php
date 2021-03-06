<?php

namespace App\Http\Controllers\Heroes;

use App\Http\Repositories\HeroesRepositoy;
use App\Http\Repositories\TeamsRepository;
use App\Models\Hero;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HeroesTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('team-create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate(request(), [
            'name' => 'required',
            'side' => 'required',
            'size' => 'required',
        ]);

        //if everything is ok, create new team

        $team_created = Team::create([
            'name' => request('name'),
            'side' => request('side'),
            'max_size' => request('size'),
            'combat_power' => 0
        ]);

        if ($team_created) {

            //success

            $request->session()->flash('status', [
                'type' => 'success',
                'message' => 'Your team was created successfully!'
            ]);

            return redirect('myheroes/');

        } else {
            //error

            $request->session()->flash('status', [
                'type' => 'danger',
                'message' => 'Error while trying to create your new team. Please, check your form and try again!'
            ]);

            return redirect('myheroes/');
        }


        return redirect('myheroes/');
    }


    //Load attach hero to team form===================================//
    public function attachForm($id)
    {

        $hero = Hero::findOrFail($id);

        $teams = Team::all();


        return view('team-add', compact('hero', 'teams'));

    }

    //execute hero x team attaching
    public function attach(Request $request, HeroesRepositoy $heroesRepository, TeamsRepository $teamsRepository)
    {


        //find the selected hero
        $hero = Hero::find(Request('hero'));


        //lets verify if the selected hero is already into the selected team


        if ($heroesRepository->checkTeamAvailable(Request('hero'), Request('team'))) {

            //attach it to a team
            $hero->teams()->attach(Request('team'));


            $request->session()->flash('status', [
                'type' => 'success',
                'message' => 'Your hero was attached to a new team! Good job!'
            ]);


            //update team combat_power

            $teamsRepository->updateCombatPower(Request('team'));



            return redirect('myheroes/');

        } else {
            $request->session()->flash('status', [
                'type' => 'danger',
                'message' => 'You cannot be added to this team.'
            ]);


            return redirect('myheroes/');
        }


    }


    public function detach($id, $team_id)
    {

        $hero = Hero::find($id);

        $hero->teams()->detach($team_id);


        Session::flash('status', [
            'type' => 'success',
            'message' => 'Your hero was removed from the team!'
        ]);

        return redirect('myheroes/');

    }





    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
