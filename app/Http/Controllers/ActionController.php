<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Drawer;
use Illuminate\Support\Facades\Session;




class ActionController extends Controller
{
    public function addCharacterBdd(Request $request)
    {
        $userId = Session::get('loginId');
        $character = new Character;
        $character->users_id = $userId;
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->comic_name = $request->comic_name;
        $character->save();

        return redirect('listCharacter');
    }


    public function editCharacter(Request $request)
    {
        $connectedUserId = Session::get('loginId');
        $character = Character::findOrFail($request->id);

        if ($character->users_id === $connectedUserId) {
            $character->name = $request->name;
            $character->creation_year = $request->creation_year;
            $character->comic_name = $request->comic_name;
            $character->save();

            return redirect('listCharacter');
        }else {
            return back()->withInput();
        }
    }

    public function deleteCharacter(Request $request)
    {   
        $connectedUserId = Session::get('loginId');


        $character = Character::findOrFail($request->id);

        if ($character->users_id === $connectedUserId) {
            
            $character->delete();
            return redirect('listCharacter');
        }else {
            return back()->with('fail', " Vous n'avez pas les droits requis ! ");
        }
    }

    // -------------------------------

    
    public function addDrawerBdd(Request $request)
    {
            $userId = Session::get('loginId');
            $drawer = new drawer;
            $drawer->users_id = $userId;
            $drawer->name = $request->name;
            $drawer->birth_year = $request->birth_year;
            $drawer->nationality = $request->nationality;
            $drawer->save();
            return redirect('listDrawer');
    }

    public function editDrawer(Request $request)
    {
            $connectedUserId = Session::get('loginId');
            $drawer = Drawer::findOrFail($request->id);
        
            if ($drawer->users_id === $connectedUserId) {
                $drawer->name = $request->name;
                $drawer->birth_year = $request->birth_year;
                $drawer->nationality = $request->nationality;
                $drawer->save();

                return redirect('listDrawer');
            } else {
                return back()->with('fail', " Vous n'avez pas les droits requis ! ");
            }
            
    }

    public function deleteDrawer(Request $request)
    {   
        
        $connectedUserId = Session::get('loginId');
        $drawer = Drawer::findOrFail($request->id);

        if ($drawer->users_id === $connectedUserId) {
            $drawer->delete();
            return redirect('listDrawer');
        } else {
            return back()->with('fail', " Vous n'avez pas les droits requis ! ");
        }

    }
}



