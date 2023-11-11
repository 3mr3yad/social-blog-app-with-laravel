<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(ModelsUser $user){
        // dd($user );
        // dd(auth()->user());
        return view(view:'profile.show' , data:[
            'user' => $user
        ]);
    }
}
