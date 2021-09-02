<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    //

    public function changePassword(){
       return view('profile.change_password');
    }

    public function newPassword(){
        
    }

    public function viewProfile(){
        return view('profile.view_profile');
    }

}
