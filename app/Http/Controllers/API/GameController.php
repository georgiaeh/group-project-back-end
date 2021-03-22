<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //access data fom the request
        //search database using request data
        //return games that match

        $difficulty = $request->input('difficulty');
        $players = $request->input('players');
        $time = $request->input('time');
        dd($time);
        // return Game::where('difficulty', '=', $difficulty)->where('min_players', '>=', $players)->get();
        //     // ->where('max_players', '<=', $players)
        //     // ->where('time', '<=', $time)

        return Game::where([
            ['difficulty', '=', $difficulty],
            ['min_players', '>=', $players]
        ])->get();
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return $game;
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