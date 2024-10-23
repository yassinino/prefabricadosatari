<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {

        $this->validate([ 
            'name' => 'required|string|min:3|max:250',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        Auth::attempt($credentials);

        session()->flash('message', 'You have successfully registered & logged in!');
 
        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.register');
    }
}
