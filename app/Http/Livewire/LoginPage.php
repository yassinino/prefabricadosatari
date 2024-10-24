<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
{

    public $email;
    public $password;
    
    public function login()
    {

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];


        $this->validate([ 
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        { 
            return redirect()->to('/');
        }
        
        session()->flash('error', '¡Credenciales inválidas!');
    }   

    public function render()
    {
        return view('livewire.login');
    }
}
