<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public bool $rememberMe = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login(Request $request)
    {
//        dd($this->validate());
        if (Auth::attempt($this->validate(), $this->rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended('/post/show');
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
