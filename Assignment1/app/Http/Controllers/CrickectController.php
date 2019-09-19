<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\player;

class CrickectController extends Controller
{
    
    public function index()
    {
        $players = player::all();
        $roles = player::groupBy('role')->pluck('role');
        
        return view('welcome',compact('players', 'roles'));
    
    }
    public function show(Request $request)
    {
        $role = $request->role;

        $players = player::where('role', $role)->get();

        return view('show', compact('players'));
    }
}
