<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Drawer;

class ActionController extends Controller
{
    public function addCharacterBdd(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->comic_name = $request->comic_name;
        $character->drawer_id = $request->drawer_id;
        $character->save();
        return redirect('listCharacter');
    }

    public function editCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->comic_name = $request->comic_name;
        $character->drawer_id = $request->drawer_id;
        $character->save();
        return redirect('listCharacter');
    }

    public function deleteCharacter(Request $request)
    {   
        $character = Character::findOrFail($request->id);
        $character->delete();
        return redirect('listCharacter');
    }

    // -------------------------------

    
    public function addDrawerBdd(Request $request)
    {
        $drawer = new drawer;
        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->save();
        return redirect('listDrawer');
    }

    public function editDrawer(Request $request)
    {
        $drawer = Drawer::findOrFail($request->id);
        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->save();
        return redirect('listDrawer');
    }

    public function deleteDrawer(Request $request)
    {   
        $drawer = Drawer::findOrFail($request->id);
        $drawer->delete();
        return redirect('listDrawer');
    }
}
