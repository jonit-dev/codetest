<?php

namespace App\Http\Controllers\Heroes;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $heroes = Hero::all(); //get all heroes available

        return view('welcome', compact('heroes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        return dd($request->all());

        //todo: validate user data ==> errors list

                   $this->validate(request(), [
                       'name' => 'required',
                       'side' => 'required',
                     ]);


         //set another default hero variables

        $hitpoints = 100;
        $attack = 30;
        $special_ability = 0;


        //create a new hero

        $created = Hero::create([
            'name' => request('name'),
            'side' => request('side'),
            'hitpoints' => $hitpoints,
            'attack' => $attack,
            'special_ability' => $special_ability
        ]);

        if($created) {


            $request->session()->flash('status', [
                'type' => 'success',
                'message' => 'Your hero was created! Now, you can save the world!'
            ]);

            return redirect('myheroes/');

        }









    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
