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

    public function show($id)
    {
        $player = player::find($id);
        return view('show', compact('player'));
    }
}
