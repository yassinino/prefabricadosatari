<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{


    public function logout()
    {
        Auth::logout();

        return redirect()->to('/login');
    }
    
}
