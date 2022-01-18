<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Drawer;


class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function listCharacter()
    {   
        $characters = Character::all();
        return view('listCharacter', ['characters' => $characters]); 
    }

    public function characterDetail($id)
    {   
        $character = Character::findOrFail($id); 
        return view('characterDetail', ['character' => $character]);
    }

    public function addCharacter()
    {
        $drawers = Drawer::all()->sortBy('name');
        return view('addCharacter', ['drawers' => $drawers]);
    }

    public function updateCharacter($id)
    {
        $character = Character::findOrfail($id);
        $drawers = Drawer::all()->sortBy('name');
        return view('updateCharacter', ['character' => $character, 'drawers' => $drawers]);
    }

    //----------------------------------

    
    public function listDrawer()
    {   
        $drawers = Drawer::all();
        return view('listDrawer', ['drawers' => $drawers]); 
        
    }

    public function drawerDetail($id)
    {   
        $drawer = Drawer::findOrFail($id); 
        return view('drawerDetail', ['drawer' => $drawer]);
    }

    public function addDrawer()
    {
        $drawers = Drawer::all()->sortBy('name');
        return view('addDrawer', ['drawers' => $drawers]);
    }

    public function updateDrawer($id)
    {
        $drawer = Drawer::findOrfail($id);
        return view('updateDrawer', ['drawer' => $drawer]);
    }
}


