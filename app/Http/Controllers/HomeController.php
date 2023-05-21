<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\Location;
use App\Models\Game;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $player = Game::count();
        $location = Location::count();
        $product = Game::sum('prize');

        return view('home', compact('player', 'location', 'product'),[
            'administrator' => Administrator::all()
        ]);
    }
}
