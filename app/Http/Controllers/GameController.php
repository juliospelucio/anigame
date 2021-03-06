<?php

namespace App\Http\Controllers;

use App\Game;
use App\Models\File;
use Illuminate\Http\Request;;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::orderBy('name')->get();
        return view('games.index', [
            'games' => $games
        ]);
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        // echo "<pre>";
        // print_r($game);
        // echo "</pre>";
        // exit;
        return view('games.show', ['game' => $game]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {

        $game = new Game();
        $game->name = request('name');
        $game->gender = request('gender');
        $game->publisher = request('publisher');
        $game->platforms = request('platforms');
        $game->score = request('score');

        $validator = Validator::make(request()->all(), [
            'name' => 'required|unique:games|max:255',
            'gender' => 'required',
            'publisher' => 'required',
            'platforms' => 'required',
            'score' => 'required',
            'score' => 'required',
            'image' => 'required|mimes:jpeg,png|max:1014'
        ]);

        if ($validator->fails()) {
            return redirect('create/game')
                ->withErrors($validator)
                ->withInput();
        }

        //checks game images 
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('/public/games');
            $fname = request()->file('image')->hashName();
            $game->url = 'games/' . $fname;
        }
        $game->save();

        return redirect('/games')->with('mssg', 'Game saved with success');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', ['game' => $game]);
    }

    public function update($id)
    {
        $game = Game::find($id);

        $game->name = request('name');
        $game->gender = request('gender');
        $game->publisher = request('publisher');
        $game->platforms = request('platforms');
        $game->score = request('score');

        $game->save();
        return redirect('/games')->with('mssg', 'Game updated with success');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        Session::flash('mssg', 'Game deleted with success');
        // return redirect('/games')->with('mssg', 'Game deleted with success');
    }
}
